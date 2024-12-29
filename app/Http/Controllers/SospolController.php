<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class SospolController extends Controller
{
    public function index(Request $request)
    {
        $this->data['pengurus'] = Pengurus::with('bidang')->get();

        return view('pages.bidang.sospol.index', $this->data);
    }

    public function adkesma(Request $request)
    {
        $this->data['pengurus'] = Pengurus::with('bidang', 'departemen')->get();

        return view('pages.bidang.sospol.adkesma', $this->data);
    }

    public function kastrat(Request $request)
    {
        $this->data['pengurus'] = Pengurus::with('bidang', 'departemen')->get();

        return view('pages.bidang.sospol.kastrat', $this->data);
    }

    public function pengmas(Request $request)
    {
        $this->data['pengurus'] = Pengurus::with('bidang', 'departemen')->get();

        return view('pages.bidang.sospol.pengmas', $this->data);
    }
}
