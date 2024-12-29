<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class BphController extends Controller
{
    public function index(Request $request)
    {
        $this->data['pengurus'] = Pengurus::all();

        return view('pages.bidang.bph', $this->data);
    }
}
