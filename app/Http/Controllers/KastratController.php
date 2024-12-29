<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KastratController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.sospol.kastrat');
    }
}
