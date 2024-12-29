<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeilmuanController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.minatbakat.keilmuan');
    }
}
