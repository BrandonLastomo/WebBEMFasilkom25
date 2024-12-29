<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class AprController extends Controller
{
    public function __construct()
    {
        $this->data['status'] = Report::status();
    }

    public function index(Request $request)
    {
        $reports = Report::orderBy('created_at', 'DESC');

        $q = $request->input('q');
        if ($q) {
            $reports = $reports->where('nama', 'like', '%' . $q . '%')
                ->orWhere('status', 'like', '%' . $q . '%');
        }

        if ($request->input('status') && in_array($request->input('status'), array_keys(Report::STATUS))) {
            $reports = $reports->where('status', '=', $request->input('status'));
        }

        $this->data['reports'] = $reports->paginate(10);

        return view('pages.aplikasi-publik.apr.index', $this->data);
    }

    public function show($slug)
    {
        $this->data['report'] = Report::where('slug', $slug)->first();

        return view('pages.aplikasi-publik.apr.detail', $this->data);
    }
}
