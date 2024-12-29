<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $this->data['pengaduan'] = Pengaduan::orderBy('created_at', 'DESC')->paginate(5);

        return view('pages.aplikasi-publik.pengaduan',$this->data);
    }

    public function store(Request $request){
        $data = $request->all();
        Pengaduan::create($data);
        return redirect()->route('pengaduan');
    }
}
