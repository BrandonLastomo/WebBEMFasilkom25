<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $this->data['beritas'] = Berita::orderBy('tanggal', 'desc')->get();
        return view('pages.fasilkom-news', $this->data);
    }
}
