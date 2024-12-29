<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaderisasiController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.psdm.kaderisasi');
    }
}
