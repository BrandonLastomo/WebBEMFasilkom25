<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\TurnamenRequest;
use App\Models\PesertaCadanganDota;
use App\Models\PesertaCadanganMlPutri;
use App\Models\PesertaCadanganMlUmum;
use App\Models\PesertaCadanganPb;
use App\Models\PesertaCadanganPubg;
use App\Models\PesertaCadanganValorant;
use App\Models\PesertaCaturPutra;
use App\Models\PesertaCaturPutri;
use App\Models\PesertaDota;
use App\Models\PesertaMc;
use App\Models\PesertaMlPutri;
use App\Models\PesertaMlUmum;
use App\Models\PesertaPb;
use App\Models\PesertaPubg;
use App\Models\PesertaValorant;
use App\Models\TimDota;
use App\Models\TimMlPutri;
use App\Models\TimMlUmum;
use App\Models\TimPb;
use App\Models\TimPubg;
use App\Models\TimValorant;
use App\Models\Turnamen;
use Illuminate\Http\Request;

use Str;

class FasilkomCupController extends Controller
{
    use Authorizable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'fcup';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['turnamens'] = Turnamen::orderBy('nama', 'ASC')->paginate(10);

        return view('pages.admin.fasilkom-cup.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.fasilkom-cup.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TurnamenRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/fcup/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'nama' => $params['nama'],
                'slug' => $params['slug'],
                'deskripsi' => $params['deskripsi'],
                'path' => $filePath,
            ];
        }

        if (Turnamen::create($params)) {
            return redirect()->route('fcup.index')->with('success', 'Turnamen berhasil ditambahkan');
        }

        return redirect()->route('fcup.index')->with('error', 'Turnamen gagal ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $turnamen = Turnamen::where('slug', $slug)->first();

        switch ($turnamen->nama) {
            case 'Mobile Legend':
                $this->data['tims'] = TimMlUmum::orderBy('created_at', 'ASC')->paginate(10);
                break;
            case 'PUBG':
                $this->data['tims'] = TimPubg::orderBy('created_at', 'ASC')->paginate(10);
                break;
            case 'Mobile Legend (P)':
                $this->data['tims'] = TimMlPutri::orderBy('created_at', 'ASC')->paginate(10);
                break;
            case 'Magic Chess':
                $this->data['pesertas'] = PesertaMc::orderBy('created_at', 'ASC')->paginate(10);
                break;
            case 'Catur Putra':
                $this->data['pesertas'] = PesertaCaturPutra::orderBy('nama_peserta', 'ASC')->paginate(10);
                break;
            case 'Catur Putri':
                $this->data['pesertas'] = PesertaCaturPutri::orderBy('nama_peserta', 'ASC')->paginate(10);
                break;
            case 'Valorant':
                $this->data['tims'] = TimValorant::orderBy('created_at', 'ASC')->paginate(10);
                break;
            case 'Point Blank':
                $this->data['tims'] = TimPb::orderBy('created_at', 'ASC')->paginate(10);
                break;
            default:
                $this->data['tims'] = TimDota::orderBy('created_at', 'ASC')->paginate(10);
                break;
        }

        $this->data['turnamen'] = $turnamen;

        return view('pages.admin.fasilkom-cup.turnamen', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turnamen = Turnamen::findOrFail($id);

        $this->data['turnamen'] = $turnamen;

        return view('pages.admin.fasilkom-cup.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TurnamenRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        $turnamen = Turnamen::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/fcup/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'nama' => $params['nama'],
                'slug' => $params['slug'],
                'deskripsi' => $params['deskripsi'],
                'path' => $filePath,
            ];
        }

        if ($turnamen->update($params)) {
            return redirect()->route('fcup.index')->with('success', 'Turnamen berhasil diperbarui');
        }

        return redirect()->route('fcup.index')->with('error', 'Turnamen gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('fcup.index');
    }

    public function pesertaTim($slug, $id)
    {
        $turnamen = Turnamen::where('slug', $slug)->first();

        switch ($turnamen->nama) {
            case 'Mobile Legend':
                $this->getPesertaMlUmum($id);
                break;
            case 'PUBG':
                $this->getPesertaPubg($id);
                break;
            case 'Mobile Legend (P)':
                $this->getPesertaMlPutri($id);
                break;
            case 'Valorant':
                $this->getPesertaValorant($id);
                break;
            case 'Point Blank':
                $this->getPesertaPb($id);
                break;
            default:
                $this->getPesertaDota($id);
                break;
        }

        $this->data['turnamen'] = $turnamen;

        return view('pages.admin.fasilkom-cup.peserta', $this->data);
    }

    public function pesertaIndividu($slug, $id)
    {
        $turnamen = Turnamen::where('slug', $slug)->first();

        switch ($turnamen->nama) {
            case 'Catur Putra':
                $this->getPesertaCaturPutra();
                $peserta = PesertaCaturPutra::where('id', $id)->first();
                break;
            case 'Catur Putri':
                $this->getPesertaCaturPutri();
                $peserta = PesertaCaturPutri::where('id', $id)->first();
                break;
            default:
                $this->getPesertaMc();
                $peserta = PesertaMc::where('id', $id)->first();
                break;
        }

        $this->data['turnamen'] = $turnamen;
        $this->data['peserta'] = $peserta;

        if ($turnamen->nama == 'Magic Chess') {
            echo "ok";
        }

        return view('pages.admin.fasilkom-cup.peserta', $this->data);
    }

    // Tim
    public function getPesertaMlUmum($id)
    {
        $tim = TimMlUmum::where('id', $id)->with('turnamen')->first();
        $pesertas = PesertaMlUmum::forTim($tim)->orderBy('nama_peserta')->get();
        $peserta_cadangan = PesertaCadanganMlUmum::forTim($tim)->orderBy('nama_peserta_cadangan')->first();

        $this->data['tim'] = $tim;
        $this->data['pesertas'] = $pesertas;
        $this->data['peserta_cadangan'] = $peserta_cadangan;
    }

    public function getPesertaPubg($id)
    {
        $tim = TimPubg::where('id', $id)->with('turnamen')->first();
        $pesertas = PesertaPubg::forTim($tim)->orderBy('nama_peserta')->get();
        $peserta_cadangan = PesertaCadanganPubg::forTim($tim)->orderBy('nama_peserta_cadangan')->first();

        $this->data['tim'] = $tim;
        $this->data['pesertas'] = $pesertas;
        $this->data['peserta_cadangan'] = $peserta_cadangan;
    }

    public function getPesertaDota($id)
    {
        $tim = TimDota::where('id', $id)->with('turnamen')->first();
        $pesertas = PesertaDota::forTim($tim)->orderBy('nama_peserta')->get();
        $peserta_cadangan = PesertaCadanganDota::forTim($tim)->orderBy('nama_peserta_cadangan')->first();

        $this->data['tim'] = $tim;
        $this->data['pesertas'] = $pesertas;
        $this->data['peserta_cadangan'] = $peserta_cadangan;
    }

    public function getPesertaValorant($id)
    {
        $tim = TimValorant::where('id', $id)->with('turnamen')->first();
        $pesertas = PesertaValorant::forTim($tim)->orderBy('nama_peserta')->get();
        $peserta_cadangan = PesertaCadanganValorant::forTim($tim)->orderBy('nama_peserta_cadangan')->first();

        $this->data['tim'] = $tim;
        $this->data['pesertas'] = $pesertas;
        $this->data['peserta_cadangan'] = $peserta_cadangan;
    }

    public function getPesertaMlPutri($id)
    {
        $tim = TimMlPutri::where('id', $id)->with('turnamen')->first();
        $pesertas = PesertaMlPutri::forTim($tim)->orderBy('nama_peserta')->get();
        $peserta_cadangan = PesertaCadanganMlPutri::forTim($tim)->orderBy('nama_peserta_cadangan')->first();

        $this->data['tim'] = $tim;
        $this->data['pesertas'] = $pesertas;
        $this->data['peserta_cadangan'] = $peserta_cadangan;
    }

    public function getPesertaPb($id)
    {
        $tim = TimPb::where('id', $id)->with('turnamen')->first();
        $pesertas = PesertaPb::forTim($tim)->orderBy('nama_peserta')->get();
        $peserta_cadangan = PesertaCadanganPb::forTim($tim)->orderBy('nama_peserta_cadangan')->first();

        $this->data['tim'] = $tim;
        $this->data['pesertas'] = $pesertas;
        $this->data['peserta_cadangan'] = $peserta_cadangan;
    }

    // Individu
    public function getPesertaCaturPutra()
    {
        $pesertas = PesertaCaturPutra::orderBy('nama_peserta')->get();

        $this->data['pesertas'] = $pesertas;
    }

    public function getPesertaCaturPutri()
    {
        $pesertas = PesertaCaturPutri::orderBy('nama_peserta')->get();

        $this->data['pesertas'] = $pesertas;
    }

    public function getPesertaMc()
    {
        $pesertas = PesertaMc::orderBy('nama_peserta')->get();

        $this->data['pesertas'] = $pesertas;
    }
}
