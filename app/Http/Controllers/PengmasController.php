<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengmasController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.sospol.pengmas');
    }
}
