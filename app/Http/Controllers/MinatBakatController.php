<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinatBakatController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('pages.bidang.minat-bakat.index', $this->data);
    }

    public function keilmuan(Request $request)
    {
        return view('pages.bidang.minat-bakat.keilmuan', $this->data);
    }

    public function olahraga(Request $request)
    {
        return view('pages.bidang.minat-bakat.olahraga', $this->data);
    }

    public function senbud(Request $request)
    {
        return view('pages.bidang.minat-bakat.senbud', $this->data);
    }
}
