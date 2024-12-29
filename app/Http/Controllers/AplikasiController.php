<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function index()
    {
        return view('pages.aplikasi-publik.index');
    }
}
