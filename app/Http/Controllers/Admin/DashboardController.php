<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use App\Models\Berita;
use App\Models\Bidang;
use App\Models\Departemen;
use App\Models\Pengurus;
use App\Models\Proker;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'dashboard';
        $this->data['currentAdminSubMenu'] = '';

        $this->middleware('role:Admin|Humas|Operator');
    }

    public function index(Request $request)
    {
        $this->data['pengurus'] = Pengurus::count();
        $this->data['bidang'] = Bidang::count();
        $this->data['departemen'] = Departemen::count();
        $this->data['proker'] = Proker::count();
        $this->data['beritas'] = Berita::orderBy('tanggal', 'DESC')->paginate(3);
        $this->data['acaras'] = Acara::orderBy('tanggal', 'ASC')->paginate(3);

        return view('pages.admin.dashboard', $this->data);
    }
}
