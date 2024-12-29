<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsdmController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('pages.bidang.psdm.index', $this->data);
    }

    public function kaderisasi(Request $request)
    {
        return view('pages.bidang.psdm.kaderisasi', $this->data);
    }

    public function pp(Request $request)
    {
        return view('pages.bidang.psdm.pp', $this->data);
    }
}
