<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use App\Models\Kajian;
use Illuminate\Http\Request;

class InfoKajianController extends Controller
{
    public function index(Request $request)
    {
        $kajians = Kajian::orderBy('created_at', 'DESC');

        $q = $request->input('q');
        if ($q) {
            $kajians = $kajians->where('nama', 'like', '%' . $q . '%');
        }

        $this->data['kajians'] = $kajians->paginate(10);

        return view('pages.aplikasi-publik.info-kajian.index', $this->data);
    }
    
    public function show($slug)
    {
        $this->data['kajian'] = Kajian::where('slug', $slug)->first();

        return view('pages.aplikasi-publik.info-kajian.detail', $this->data);
    }
}
