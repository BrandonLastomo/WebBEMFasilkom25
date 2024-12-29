<?php

namespace App\Http\Controllers\Aplikasi;

use App\Models\Event;
use Illuminate\Http\Request;

class DetailEventController extends Controller
{
    public function index($slug)
    {
        $this->data['event'] = Event::where('slug', $slug)->first();
        return view('pages.aplikasi-publik.detail-event.index', $this->data);
    }
}
