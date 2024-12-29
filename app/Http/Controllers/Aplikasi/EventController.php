<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $this->data['events'] = Event::All()->sortDesc();
        return view('pages.aplikasi-publik.fasilkom-event', $this->data);
    }
}
