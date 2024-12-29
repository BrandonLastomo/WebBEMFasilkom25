<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\KaryaRequest;
use App\Models\Karya;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class KaryaController extends Controller
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

        $this->data['currentAdminMenu'] = 'karya';
        $this->data['currentAdminSubMenu'] = '';

        $this->data['prodi'] = Karya::prodi();

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['karyas'] = Karya::orderBy('created_at', 'ASC')->paginate(10);

        return view('pages.admin.konten.karya.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.konten.karya.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryaRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/karya/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'deskripsi' => $params['deskripsi'],
                'nama' => $params['nama'],
                'kelas' => $params['kelas'],
                'prodi' => $params['prodi'],
            ];
        }

        if (Karya::create($params)) {
            return redirect()->route('karya.index')->with('success', 'Karya berhasil ditambahkan');
        }

        return redirect()->route('karya.index')->with('error', 'Karya gagal ditambahkan');
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
        $karya = Karya::findOrFail($id);

        $this->data['karya'] = $karya;

        return view('pages.admin.konten.karya.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KaryaRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        $karya = Karya::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/karya/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'deskripsi' => $params['deskripsi'],
                'nama' => $params['nama'],
            ];
        }

        if ($karya->update($params)) {
            return redirect()->route('karya.index')->with('success', 'Karya berhasil diperbarui');
        }

        return redirect()->route('karya.index')->with('error', 'Karya gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karya = Karya::findOrFail($id);

        if ($karya->delete()) {
            return redirect()->route('karya.index')->with('success', 'Karya berhasil dihapus');
        }

        return redirect()->route('karya.index')->with('error', 'Karya gagal dihapus');
    }
}
