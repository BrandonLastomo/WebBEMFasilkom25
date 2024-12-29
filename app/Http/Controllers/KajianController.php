<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KajianController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'kajian';

        $this->middleware('role:Admin|Humas|Operator');
    }
    public function index(Request $request)
    {
        $kajians = Kajian::orderBy('created_at', 'DESC')->paginate(5, ['*'], 'kajians');
        dd($kajians);
        // return view('pages.admin.apr.index', $this->data);
    }
}
