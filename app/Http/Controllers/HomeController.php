<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Berita;
use App\Models\Karya;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $this->data['beritas'] = Berita::orderBy('tanggal', 'DESC')->take(5)->get();
        $this->data['karyas'] = Karya::orderBy('created_at', 'ASC')->paginate(10);
        $this->data['acaras'] = Acara::orderBy('tanggal', 'ASC')->get();
        $this->data['bulans'] = Acara::bulan();
        $this->data['pengaduan'] = Pengaduan::orderBy('created_at', 'DESC')->paginate(5);
        // dd($this->data);

        return view('pages.home', $this->data);
    }
}
