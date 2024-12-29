<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

use DB;

class RoleController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'akun';
        $this->data['currentAdminSubMenu'] = 'peran ';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display  a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['roles'] = Role::orderBy('name', 'ASC')->paginate(10);
        $this->data['permissions'] = Permission::all();

        return view('pages.admin.data.role.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['permissions'] = Permission::all();

        return view('pages.admin.data.role.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        // dd($request->except('_token'));
        $params = $request->validated();

        // dd($params['name']);

        if ($params['name'] != 'Maba') {
            $params['guard_name'] = 'web';
        }

        $params['guard_name'] = 'maba';

        return DB::transaction(function () use ($params) {
            if ($role = Role::create($params)) {
                $permissions = !empty($params['permissions']) ? $params['permissions'] : [];
                $role->syncPermissions($permissions);

                return redirect('admin/data/role')->with('success', 'Peran berhasil ditambahkan');
            }
        });

        return redirect('admin/data/role/create')->with('error', 'Peran gagal ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['role'] = Role::findOrFail($id);

        return view('pages.admin.data.role.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        $this->data['role'] = $role;
        $this->data['permissions'] = Permission::all();
        $this->data['disabled'] = ($role->name == Role::ADMIN) ? 'disabled' : '';

        return view('pages.admin.data.role.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $params = $request->validated();

        if ($role->name == Role::ADMIN) {
            $role->touch();
            $role->syncPermissions(Permission::all());

            return redirect('admin/data/role')->with('success', 'Peran ' . $role->name . ' berhasil diperbarui');
        }

        return DB::transaction(function () use ($params, $role) {
            $role->update($params);
            $role->touch();
            $permissions = !empty($params['permissions']) ? $params['permissions'] : [];
            $role->syncPermissions($permissions);

            return redirect('admin/data/role')->with('success', 'Peran ' . $role->name . ' berhasil diperbarui');
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        if ($role->name == Role::ADMIN) {
            return redirect('admin/data/role')->with('error', 'Tidak dapat menghapus peran ' . $role->name . '!');
        }

        $role->delete();

        return redirect('admin/data/role')->with('success', 'Peran ' . $role->name . ' berhasil dihapus');
    }
}
