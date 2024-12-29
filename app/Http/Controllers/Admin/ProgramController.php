<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;

use DB;
use Str;

class ProgramController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'pkm';
        $this->data['currentAdminSubMenu'] = 'program';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['programs'] = Program::orderBy('created_at', 'ASC')->paginate(10);

        return view('pages.admin.pkm.program.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pkm.program.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/program/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
                'path' => $filePath,
            ];
        }

        if (Program::create($params)) {
            return redirect()->route('program.index')->with('success', 'Program berhasil ditambahkan');
        }

        return redirect()->route('program.index')->with('error', 'Program gagal ditambahkan');
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
        $program = Program::findOrfail($id);

        $this->data['program'] = $program;

        return view('pages.admin.pkm.program.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        $program = Program::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/program/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
                'path' => $filePath,
            ];
        }

        if ($program->update($params)) {
            return redirect()->route('program.index')->with('success', 'Program berhasil diperbarui');
        }

        return redirect()->route('program.index')->with('error', 'Program gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        if ($program->delete()) {
            return redirect()->route('program.index')->with('success', 'Program berhasil dihapus');
        }

        return redirect()->route('program.index')->with('error', 'Program gagal dihapus');
    }
}
