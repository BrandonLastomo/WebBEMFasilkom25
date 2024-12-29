<?php

namespace App\Http\Controllers\PINJAM;


use App\Models\Peminjam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;;

class PinjamBemController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('auth:peminjam');
    }

    public function index()
    {
        return view('pages.pinjam-bem.login');
    }
}