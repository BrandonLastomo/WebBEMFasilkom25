<?php

namespace App\Http\Controllers\PINJAM;

use App\Http\Controllers\Controller;
use App\Models\Peminjam;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    
    public function index(){
        $user  = Peminjam::all();
        return view('pages.pinjam-bem.peminjaman.profil',compact('user'));
    }
}
