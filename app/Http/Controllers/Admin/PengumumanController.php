<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengumumanRequest;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

use Str;

class PengumumanController extends Controller
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
        $this->data['currentAdminSubMenu'] = 'pengumuman';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['pengumumans'] = Pengumuman::orderBy('created_at', 'ASC')->paginate(10);

        return view('pages.admin.pkm.pengumuman.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pkm.pengumuman.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengumumanRequest $request)
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

        if (Pengumuman::create($params)) {
            return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan');
        }

        return redirect()->route('pengumuman.index')->with('error', 'Pengumuman gagal ditambahkan');
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
        $pengumuman = Pengumuman::findOrfail($id);

        $this->data['pengumuman'] = $pengumuman;

        return view('pages.admin.pkm.pengumuman.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengumumanRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        $pengumuman = Pengumuman::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/pengumuman/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
                'path' => $filePath,
            ];
        }

        if ($pengumuman->update($params)) {
            return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui');
        }

        return redirect()->route('pengumuman.index')->with('error', 'Pengumuman gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if ($pengumuman->delete()) {
            return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus');
        }

        return redirect()->route('pengumuman.index')->with('error', 'Pengumuman gagal dihapus');
    }
}
