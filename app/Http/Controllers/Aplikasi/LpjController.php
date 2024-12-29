<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Departemen;
use App\Models\Proker;
use Illuminate\Http\Request;

class LpjController extends Controller
{
    public function index(Request $request)
    {
        $this->data['bidangs'] = Bidang::all();

        return view('pages.aplikasi-publik.lpj.index', $this->data);
    }

    public function bidang($slug)
    {
        $bidang = Bidang::where('slug', $slug)->first();
        $departemens = Departemen::orderBy('created_at', 'ASC')->with('bidang')->get()->toArray();

        $this->data['bidang'] = $bidang;
        $this->data['departemens'] = array_splice($departemens, 0, 12);

        return view('pages.aplikasi-publik.lpj.bidang', $this->data);
    }

    public function departemen($slug)
    {
        $departemen = Departemen::where('slug', $slug)->first();
        $prokers = Proker::orderBy('created_at', 'ASC')->with('departemen')->get();
        // dd($departemen);

        $this->data['departemen'] = $departemen;
        $this->data['prokers'] = $prokers;

        return view('pages.aplikasi-publik.lpj.departemen', $this->data);
    }

    public function proker($slug_dept, $slug_proker)
    {
        $departemen = Departemen::where('slug', $slug_dept)->first();
        $proker = Proker::where('slug', $slug_proker)->first();

        $this->data['departemen'] = $departemen;
        $this->data['proker'] = $proker;

        // dd($this->data);

        return view('pages.aplikasi-publik.lpj.proker', $this->data);
    }
}
