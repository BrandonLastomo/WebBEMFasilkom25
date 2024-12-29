<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use DB;

class UserController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'akun';
        $this->data['currentAdminSubMenu'] = 'peran';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->data['users'] = User::orderBy('created_at', 'ASC')->paginate(10);

        return view('pages.admin.data.user.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['permissions'] = Permission::all();
        $this->data['roles'] = Role::pluck('name', 'id');
        $this->data['roleId'] = null;

        return view('pages.admin.data.user.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $params = $request->validated();

        return DB::transaction(function () use ($params, $request) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $this->syncRolesAndPermissions($params, $user);

            return redirect('admin/data/user')->with('success', 'User berhasil ditambahkan');
        });

        return redirect('admin/data/user/create')->with('error', 'User gagal ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['user'] = User::findOrFail($id);

        return view('pages.admin.data.user.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->data['user'] = $user;
        $this->data['permissions'] = Permission::all();
        $this->data['roles'] = Role::pluck('name', 'id');
        $this->data['roleId'] = $user->roles->first() ? $user->roles->first()->id : null;

        return view('pages.admin.data.user.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $params = $request->validated();
        $user = User::findOrFail($id);

        return DB::transaction(function () use ($params, $user) {
            $params['password'] = Hash::make($params['password']);

            if (!$params['password']) {
                unset($params['password']);
            }

            $user->update($params);
            $this->syncRolesAndPermissions($params, $user);

            return redirect('admin/data/user')->with('success', 'User ' . $user->name . ' berhasil diperbarui');
        });

        return redirect('admin/data/user')->with('error', 'User ' . $user->name . ' gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->roles->implode('name', ', ') == Role::ADMIN) {
            return redirect('admin/data/user')->with('error', 'Tidak dapat menghapus user dengan peran Admin!');
        }

        if ($user->name == Auth::user()->name) {
            return redirect('admin/data/user')->with('error', 'Tidak dapat menghapus user yang sedang login!');
        }

        $user->delete();

        return redirect('admin/data/user')->with('success', 'User ' . $user->name . ' berhasil dihapus');
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
