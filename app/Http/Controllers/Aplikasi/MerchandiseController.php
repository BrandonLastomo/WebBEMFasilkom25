<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(Request $request)
    {
        $merchandises = Merchandise::orderBy('created_at', 'DESC');

        $q = $request->input('q');
        if ($q) {
            $merchandises = $merchandises->where('nama', 'like', '%' . $q . '%');
        }

        $this->data['merchandises'] = $merchandises->paginate(10);

        return view('pages.aplikasi-publik.merchandise.index', $this->data);
    }
    
    public function show($slug)
    {
        $this->data['merchandise'] = Merchandise::where('slug', $slug)->first();

        return view('pages.aplikasi-publik.merchandise.detail', $this->data);
    }
}
