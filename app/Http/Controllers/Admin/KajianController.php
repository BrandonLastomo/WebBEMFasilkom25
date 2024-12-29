<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\KajianRequest;
use App\Models\Kajian;
use Illuminate\Http\Request;
use DB;

use Str;

class KajianController extends Controller
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
        $this->data['currentAdminSubMenu'] = 'kajian';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['kajians'] = Kajian::orderBy('created_at', 'DESC')->paginate(5, ['*'], 'kajians');
        return view('pages.admin.kajian.index',$this->data);
    }
    
    public function create ()
    {
        return view('pages.admin.kajian.form', $this->data);
    }
    
    public function store(KajianRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();
        
            $folder = '/uploads/kajian/images';
            $params['path'] = $image->storeAs($folder, $fileName, 'public');
        }
        
        $params = [
            'nama' => $params['nama'],
            'slug' => $params['slug'],
            'deskripsi' => $params['deskripsi'],
            'path' => $params['path'],
        ];
        
        
        if (Kajian::create($params)) {
            return redirect()->route('info-kajian.index')->with('success', 'Kajian berhasil ditambahkan');
        }
        
        return redirect()->route('info-kajian.index')->with('error', 'Kajian gagal ditambahkan');
    }
    
    public function show($id)
    {
        $this->data['kajians'] = Kajian::findOrFail($id);

        return view('pages.admin.kajian.show', $this->data);
    }
    
    public function edit($id)
    {
        $kajian = Kajian::findOrFail($id);

        $this->data['kajian'] = $kajian;
        
        return view('pages.admin.kajian.form', $this->data);
    }
    
    public function update(KajianRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);
    
        $kajian = Kajian::findOrFail($id);
    
        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();
    
            $folder = '/uploads/kajian/images';
            $params['path'] = $image->storeAs($folder, $fileName, 'public');
    
            // Hapus file lama jika ada
            if ($kajian->path) {
                Storage::delete($kajian->path);
            }
        }
    
        $params = [
            'nama' => $params['nama'],
            'slug' => $params['slug'],
            'deskripsi' => $params['deskripsi'],
            'path' => $params['path'] ?? $kajian->path, // Pastikan nilai path disertakan
        ];
    
        if ($kajian->update($params)) {
            $kajian->touch();
            return redirect()->route('info-kajian.index')->with('success', 'Kajian berhasil diperbarui');
        }
    
        return redirect()->route('info-kajian.index')->with('error', 'Kajian gagal diperbarui');
    }

    
    public function destroy($id, Kajian $kajian)
    {
        $kajian = Kajian::findOrFail($id);
        
        if($kajian->path) {
            Storage::delete($kajian->foto);
        }

        if ($kajian->delete()) {
            return redirect()->route('info-kajian.index')->with('success', 'Kajian berhasil dihapus');
        }
    }
}