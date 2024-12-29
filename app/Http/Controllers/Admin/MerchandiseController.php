<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\MerchandiseRequest;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use DB;

use Str;

class MerchandiseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'merchandise';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['merchandises'] = Merchandise::orderBy('created_at', 'DESC')->paginate(5, ['*'], 'merchandises');
        return view('pages.admin.merchandise.index',$this->data);
    }
    
    public function create ()
    {
        return view('pages.admin.merchandise.form', $this->data);
    }
    
    public function store(MerchandiseRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();
        
            $folder = '/uploads/merchandise/images';
            $params['path'] = $image->storeAs($folder, $fileName, 'public');
        }
        
        $params = [
            'nama' => $params['nama'],
            'slug' => $params['slug'],
            'deskripsi' => $params['deskripsi'],
            'harga' => $params['harga'],
            'status' => $params['status'],
            'path' => $params['path'],
        ];
        
        
        if (Merchandise::create($params)) {
            return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil ditambahkan');
        }
        
        return redirect()->route('merchandise.index')->with('error', 'Merchandise gagal ditambahkan');
    }
    
    public function show($id)
    {
        $this->data['merchandises'] = Merchandise::findOrFail($id);

        return view('pages.admin.merchandise.show', $this->data);
    }
    
    public function edit($id)
    {
        $merchandise = Merchandise::findOrFail($id);

        $this->data['merchandise'] = $merchandise;
        
        return view('pages.admin.merchandise.form', $this->data);
    }
    
    public function update(MerchandiseRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);
    
        $merchandise = Merchandise::findOrFail($id);
    
        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();
    
            $folder = '/uploads/merchandise/images';
            $params['path'] = $image->storeAs($folder, $fileName, 'public');
    
            // Hapus file lama jika ada
            if ($merchandise->path) {
                Storage::delete($merchandise->path);
            }
        }
    
        $params = [
            'nama' => $params['nama'],
            'slug' => $params['slug'],
            'harga' => $params['harga'],
            'status' => $params['status'],
            'deskripsi' => $params['deskripsi'],
            'path' => $params['path'] ?? $merchandise->path, // Pastikan nilai path disertakan
        ];
    
        if ($merchandise->update($params)) {
            $merchandise->touch();
            return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil diperbarui');
        }
    
        return redirect()->route('merchandise.index')->with('error', 'Merchandise gagal diperbarui');
    }

    
    public function destroy($id, Merchandise $merchandise)
    {
        $merchandise = Merchandise::findOrFail($id);
        
        if($merchandise->path) {
            Storage::delete($merchandise->foto);
        }

        if ($merchandise->delete()) {
            return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil dihapus');
        }
    }
}