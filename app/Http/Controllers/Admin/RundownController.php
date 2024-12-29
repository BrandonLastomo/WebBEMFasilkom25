<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Rundown;
use Illuminate\Http\Request;

class RundownController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'pkkmb';
        $this->data['currentAdminSubMenu'] = 'rundown';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['rundowns'] = Rundown::orderBy('jam', 'ASC')->paginate(10);

        return view('pages.admin.pkkmb.rundown.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pkkmb.rundown.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'jam' => 'required',
            'deskripsi' => '',
        ]);

        if (Rundown::create($params)) {
            return redirect()->route('rundown.index')->with('success', 'Rundown berhasil ditambahkan');
        }

        return redirect()->route('rundown.index')->with('error', 'Rundown gagal ditambahkan');
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
        $this->data['rundown'] = Rundown::where('id', $id)->first();

        return view('pages.admin.pkkmb.rundown.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rundown = Rundown::where('id', $id)->first();
        $params = $request->validate([
            'jam' => 'required',
            'deskripsi' => '',
        ]);

        if ($rundown->update($params)) {
            return redirect()->route('rundown.index')->with('success', 'Rundown berhasil diperbarui');
        }

        return redirect()->route('rundown.index')->with('error', 'Rundown gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rundown = Rundown::where('id', $id)->first();

        if ($rundown->delete()) {
            return redirect()->route('rundown.index')->with('success', 'Rundown berhasil dihapus');
        }

        return redirect()->route('rundown.index')->with('error', 'Rundown gagal dihapus');
    }
}
