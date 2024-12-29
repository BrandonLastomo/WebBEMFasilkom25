<?php

namespace App\Http\Controllers\PINJAM;

use App\Http\Controllers\Controller;
use App\Models\Bemitory;
use App\Models\Peminjam;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $items  = Bemitory::all();
        return view('pages.pinjam-bem.peminjaman.peminjaman',compact('items'));
    }

    public function store(Request $request){
        $data = $request->all();
        Peminjaman::create($data);
        return redirect()->route('pinjam.peminjaman');
    }
}
