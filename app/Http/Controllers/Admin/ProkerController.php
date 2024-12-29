<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProkerRequest;
use App\Models\Departemen;
use App\Models\Proker;
use Illuminate\Http\Request;

use Str;

class ProkerController extends Controller
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

        $this->data['currentAdminMenu'] = 'proker';
        $this->data['currentAdminSubMenu'] = '';

        $this->data['status'] = Proker::status();
        $this->data['triwulan'] = Proker::triwulan();

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['prokers'] = Proker::orderBy('id_departemen', 'ASC')->with('departemen')->paginate(10);

        return view('pages.admin.data.proker.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arrDepartemens = Departemen::pluck('nama', 'id')->toArray();

        $departemens = array_splice($arrDepartemens, 0, 12);

        // Set the index number from one
        $New_start_index = 1;

        $departemens = array_combine(
            range(
                $New_start_index,
                count($departemens) + ($New_start_index - 1)
            ),
            array_values($departemens)
        );

        $this->data['departemens'] = $departemens;
        $this->data['proker'] = null;

        return view('pages.admin.data.proker.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProkerRequest $request)
    {
        $params = $request->validated();

        $params['slug'] = Str::slug($params['nama_proker']);

        if (Proker::create($params)) {
            return redirect()->route('proker.index')->with('success', 'Program Kerja berhasil ditambahkan');
        }

        return redirect()->route('proker.index')->with('error', 'Program Kerja gagal ditambahkan');
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
        $departemens = Departemen::pluck('nama', 'id');
        $proker = Proker::findOrFail($id);

        $this->data['departemens'] = $departemens;
        $this->data['proker'] = $proker;

        return view('pages.admin.data.proker.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProkerRequest $request, $id)
    {
        // dd($request);
        $params = $request->validated();
        $proker = Proker::findOrFail($id);

        $params['slug'] = Str::slug($params['nama_proker']);

        if ($proker->update($params)) {
            $proker->touch();
            return redirect()->route('proker.index')->with('success', 'Program Kerja berhasil diperbarui');
        }

        return redirect()->route('proker.index')->with('error', 'Program Kerja gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proker = Proker::findOrFail($id);

        if ($proker->delete()) {
            return redirect()->route('proker.index')->with('success', 'Program Kerja berhasil dihapus');
        }

        return redirect()->route('proker.index')->with('error', 'Program Kerja gagal dihapus');
    }
}
