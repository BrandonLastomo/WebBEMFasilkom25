<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BemitoryController extends Controller
{
    public function index()
    {
        return view('pages.pinjam-bem.index');
    }
}
