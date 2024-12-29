<?php

namespace App\Http\Controllers\PINJAM;

use App\Http\Controllers\Controller;
use App\Models\Bemitory;
use Illuminate\Http\Request;

class LihatBarangController extends Controller
{
    
    public function index(Request $request){

        if($request){
            $data_barang  = Bemitory::where('barang','LIKE','%' .$request->search.'%')->get();
        }else{
            $data_barang  = Bemitory::all();
        }
        return view('pages.pinjam-bem.peminjaman.lihatbarang',compact('data_barang'));
    }
}
