<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlahragaController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.minatbakat.olahraga');
    }
}
