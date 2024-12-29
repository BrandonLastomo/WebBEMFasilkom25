<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

use Str;

class InformasiController extends Controller
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
        $this->data['currentAdminSubMenu'] = 'informasi';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['informasis'] = Informasi::orderBy('created_at', 'ASC')->paginate(10);

        return view('pages.admin.pkkmb.informasi.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pkkmb.informasi.form', $this->data);
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
            'judul' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => '',
        ]);

        if ($request->hasFile('image')) {
            $image = $params['image'];
            $name = $params['judul'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/pkkmb/informasi';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params['path'] = $filePath;
        }

        $params['slug'] = Str::slug($params['judul']);

        if (Informasi::create($params)) {
            return redirect()->route('informasi.index')->with('success', 'Informasi berhasil ditambahkan');
        }

        return redirect()->route('informasi.index')->with('error', 'Informasi gagal ditambahkan');
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
        $this->data['informasi'] = Informasi::where('id', $id)->first();

        return view('pages.admin.pkkmb.informasi.form', $this->data);
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
        $informasi = Informasi::where('id', $id)->first();
        $params = $request->validate([
            'judul' => 'required|string',
            'image' => '',
            'deskripsi' => '',
        ]);

        if ($request->hasFile('image')) {
            $image = $params['image'];
            $name = $params['judul'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/pkkmb/informasi';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params['path'] = $filePath;
        }

        $params['slug'] = Str::slug($params['judul']);

        if ($informasi->update($params)) {
            return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbarui');
        }

        return redirect()->route('informasi.index')->with('error', 'Informasi gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::where('id', $id)->first();

        if ($informasi->delete()) {
            return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dihapus');
        }

        return redirect()->route('informasi.index')->with('error', 'Informasi gagal dihapus');
    }
}
