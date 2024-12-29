<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PkmCentreController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        // return view('pages.aplikasi-publik.pkm');
        return view('pages.aplikasi-publik.pkm.beranda');
    }
}
