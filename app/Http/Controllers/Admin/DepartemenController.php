<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartemenRequest;
use App\Models\Bidang;
use App\Models\Departemen;
use Illuminate\Http\Request;

use Str;

class DepartemenController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'struktur';
        $this->data['currentAdminSubMenu'] = 'bidang-departemen';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->data['departemens'] = Departemen::with('bidang')->paginate(10);

        // return view('pages.admin.data.struktur.bidang-departemen.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemens = Departemen::all();
        $bidangs = Bidang::pluck('nama', 'id');

        $this->data['departemens'] = $departemens;
        $this->data['bidangs'] = $bidangs;

        return view('pages.admin.data.bidang-departemen.form-departemen', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartemenRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        Departemen::create($params);

        return redirect()->route('admin.struktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departemen = Departemen::findOrFail($id);
        $bidangs = Bidang::pluck('nama', 'id');

        $this->data['departemen'] = $departemen;
        $this->data['bidangs'] = $bidangs;

        return view('pages.admin.data.bidang-departemen.form-departemen', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartemenRequest $request, $id)
    {
        $params = $request->validated();

        $departemen = Departemen::findOrFail($id);

        $departemen->update($params);

        return redirect()->route('admin.struktur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departemen = Departemen::findOrFail($id);

        $departemen->delete();

        return redirect()->route('admin.struktur');
    }
}
