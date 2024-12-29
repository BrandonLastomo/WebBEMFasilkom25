<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DetailNewsController extends Controller
{
    public function index($slug)
    {
        $this->data['berita'] = Berita::where('slug', $slug)->first();
        return view('pages.detail-berita.index', $this->data);
    }
}
