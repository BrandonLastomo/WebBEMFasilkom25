<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\PeminjamRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\Peminjam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use DB;

class PeminjamController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'akun';
        $this->data['currentAdminSubMenu'] = 'peminjam';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('searchpeminjam')){
            $this->data['users'] = Peminjam::orderBy('id', 'DESC')->where('nama','LIKE','%' .$request->searchpeminjam.'%')->orWhere('prodi','LIKE','%' .$request->searchpeminjam.'%')
                ->paginate(10, ['*'], 'prodi')->withQueryString();
            }else {
                $this->data['users'] = Peminjam::orderBy('id', 'DESC')->paginate(10, ['*'], 'users');  
                }


        return view('pages.admin.data.peminjam.index', $this->data);
    }

    public function store(PeminjamRequest $request)
    {
        $params = $request->validated();

        return DB::transaction(function () use ($params, $request) {
            $user = Peminjam::create([
                'nama' => $request->nama,
                'npm' => $request->npm,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'prodi' => $request->prodi,
                'password' => Hash::make($request->password),
            ]);

            $this->syncRolesAndPermissions($params, $user);

            return redirect('admin/data/peminjam')->with('success', 'Peminjam berhasil ditambahkan');
        });

        return redirect('admin/data/peminjam/create')->with('error', 'Peminjam gagal ditambahkan');
    }

    public function edit($id)
    {
        $user = Peminjam::findOrFail($id);

        $this->data['user'] = $user;
        $this->data['permissions'] = Permission::all();
        $this->data['roles'] = Role::pluck('name', 'id');
        $this->data['roleId'] = $user->roles->first() ? $user->roles->first()->id : null;

        return view('pages.admin.data.peminjam.form', $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Peminjam::findOrFail($id);

        if ($user->roles->implode('name', ', ') == Role::ADMIN) {
            return redirect('admin/data/peminjam')->with('error', 'Tidak dapat menghapus user dengan peran Admin!');
        }

        if ($user->name == Auth::user()->name) {
            return redirect('admin/data/peminjam')->with('error', 'Tidak dapat menghapus user yang sedang login!');
        }

        $user->delete();

        return redirect('admin/data/peminjam')->with('success', 'Peminjam ' . $user->nama . ' berhasil dihapus');
    }

    public function create()
    {
        $this->data['permissions'] = Permission::all();
        $this->data['roles'] = Role::pluck('name', 'id');
        $this->data['roleId'] = null;

        return view('pages.admin.data.peminjam.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeminjamRequest $request, $id)
    {
        $params = $request->validated();
        $user = Peminjam::findOrFail($id);

        return DB::transaction(function () use ($params, $user) {
            $params['password'] = Hash::make($params['password']);

            if (!$params['password']) {
                unset($params['password']);
            }

            $user->update($params);
            $this->syncRolesAndPermissions($params, $user);

            return redirect('admin/data/peminjam')->with('success', 'Peminjam ' . $user->name . ' berhasil diperbarui');
        });

        return redirect('admin/data/peminjam')->with('error', 'Peminjam ' . $user->name . ' gagal diperbarui');
    }

    /**
     * Sync roles and permissions
     *
     * @param Request $request
     * @param $user
     * @return string
     */
    private function syncRolesAndPermissions($params, $user)
    {
        // Get the submitted roles
        $roles = isset($params['role_id']) ? [$params['role_id']] : [];
        $permissions = isset($params['permissions']) ? $params['permissions'] : [];

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if (!$user->hasAllRoles($roles)) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);

        return $user;
    }
    

}
