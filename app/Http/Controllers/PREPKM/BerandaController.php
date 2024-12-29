<?php

namespace App\Http\Controllers\PREPKM;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use App\Models\Program;
use App\Models\Preview;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentPkmMenu'] = 'beranda';
        $this->data['currentPkmSubMenu'] = '';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['programs'] = Program::all();
        $this->data['pengumumans'] = Pengumuman::all();
        $this->data['previews'] = Preview::all();

        return view('pages.aplikasi-publik.prepkm.beranda.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_program($slug)
    {
        $program = Program::where('slug', $slug)->first();

        if (!$program) {
            return redirect()->route('beranda');
        }

        $this->data['program'] = $program;

        return view('pages.aplikasi-publik.prepkm.beranda.detail', $this->data);
    }

    public function show_pengumuman($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->first();

        if (!$pengumuman) {
            return redirect()->route('beranda');
        }

        $this->data['pengumuman'] = $pengumuman;

        return view('pages.aplikasi-publik.prepkm.beranda.pengumuman.detail', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
