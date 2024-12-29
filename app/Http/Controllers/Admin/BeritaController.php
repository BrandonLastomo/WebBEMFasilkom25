<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BeritaController extends Controller
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

        $this->data['currentAdminMenu'] = 'berita';
        $this->data['currentAdminSubMenu'] = '';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['beritas'] = Berita::orderBy('tanggal', 'DESC')->paginate(5);

        return view('pages.admin.konten.berita.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.konten.berita.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeritaRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/berita/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
            ];
        }

        if (Berita::create($params)) {
            return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
        }

        return redirect()->route('berita.index')->with('error', 'Berita gagal ditambahkan');
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
        $berita = Berita::findOrFail($id);

        $this->data['berita'] = $berita;

        return view('pages.admin.konten.berita.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BeritaRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        $berita = Berita::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/berita/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
            ];
        }

        if ($berita->update($params)) {
            return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
        }

        return redirect()->route('berita.index')->with('error', 'Berita gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->delete()) {
            return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
        }

        return redirect()->route('berita.index')->with('error', 'Berita gagal dihapus');
    }
}
