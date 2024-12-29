<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.tentang-kami.visi-misi');
    }
}
