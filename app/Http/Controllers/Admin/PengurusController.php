<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\PengurusRequest;
use App\Models\Bidang;
use App\Models\Departemen;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    use Authorizable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'struktur';
        $this->data['currentAdminSubMenu'] = 'pengurus';

        $this->data['jabatan'] = Pengurus::jabatan();

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['pengurus'] = Pengurus::orderBy('id_bidang', 'ASC')->with('bidang', 'departemen')->paginate(10);

        return view('pages.admin.data.pengurus.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidangs = Bidang::pluck('nama', 'id');
        $pengurus = Pengurus::orderBy('nama', 'ASC')->get();

        $this->data['bidangs'] = $bidangs;
        $this->data['pengurus'] = $pengurus->toArray();
        $this->data['anggota'] = null;
        $this->data['departemens'] = [];

        return view('pages.admin.data.pengurus.form', $this->data);
    }

    public function fetch(Request $request)
    {
        $data = Departemen::select('nama', 'id')->where('id_bidang', $request->id)->get();

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengurusRequest $request)
    {
        $params = $request->validated();

        Pengurus::create($params);

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil ditambahkan');
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
        $anggota = Pengurus::findOrFail($id);
        $bidangs = Bidang::pluck('nama', 'id');
        $departemens = Departemen::pluck('nama', 'id');

        $this->data['bidangs'] = $bidangs;
        $this->data['anggota'] = $anggota;
        $this->data['departemens'] = $departemens;

        return view('pages.admin.data.pengurus.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengurusRequest $request, $id)
    {
        $params = $request->except('_token');

        $pengurus = Pengurus::findOrFail($id);

        $pengurus->update($params);

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);

        $pengurus->delete();

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil dihapus');
    }
}
