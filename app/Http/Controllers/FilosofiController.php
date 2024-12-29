<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilosofiController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.tentang-kami.filosofi-logo');
    }
}
