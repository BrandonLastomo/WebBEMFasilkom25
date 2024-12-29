<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class KominfoController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('pages.bidang.kominfo.index', $this->data);
    }

    public function bismit(Request $request)
    {
        return view('pages.bidang.kominfo.bismit', $this->data);
    }

    public function media(Request $request)
    {
        return view('pages.bidang.kominfo.media', $this->data);
    }

    public function pti(Request $request)
    {
        return view('pages.bidang.kominfo.pti', $this->data);
    }

    public function humas(Request $request)
    {
        return view('pages.bidang.kominfo.humas', $this->data);
    }
}
