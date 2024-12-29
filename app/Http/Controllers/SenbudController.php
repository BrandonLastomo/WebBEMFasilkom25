<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenbudController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.minatbakat.senbud');
    }
}
