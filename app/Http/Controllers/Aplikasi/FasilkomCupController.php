<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
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

use DB;

class FasilkomCupController extends Controller
{
    public function index(Request $request)
    {
        $this->data['turnamens'] = Turnamen::orderBy('created_at', 'ASC')->get();

        return view('pages.aplikasi-publik.fasilkom-cup.index', $this->data);
    }

    public function detail($slug)
    {
        $this->data['turnamen'] = Turnamen::where('slug', $slug)->first();

        return view('pages.aplikasi-publik.fasilkom-cup.detail', $this->data);
    }

    public function register($slug)
    {
        $this->data['turnamen'] = Turnamen::where('slug', $slug)->first();
        $this->data['angkatan'] = Turnamen::angkatan();
        $this->data['prodi'] = Turnamen::prodi();

        return view('pages.aplikasi-publik.fasilkom-cup.form', $this->data);
    }

    public function store(Request $request)
    {
        $turnamen = $request->nama_turnamen;

        switch ($turnamen) {
            case 'Mobile Legend':
                $this->saveMlUmum($request);
                break;
            case 'PUBG':
                $this->savePubg($request);
                break;
            case 'Mobile Legend (P)':
                $this->saveMlPutri($request);
                break;
            case 'Magic Chess':
                $this->saveMc($request);
                break;
            case 'Catur Putra':
                $this->saveCaturPutra($request);
                break;
            case 'Catur Putri':
                $this->saveCaturPutri($request);
                break;
            case 'Valorant':
                $this->saveValorant($request);
                break;
            case 'Point Blank':
                $this->savePb($request);
                break;
            default:
                $this->saveDota($request);
                break;
        }

        return view('pages.aplikasi-publik.fasilkom-cup.informasi', compact('turnamen'));
    }

    // Tim
    public function saveMlUmum($request)
    {
        $params = $request->validate(
            [
                'id_turnamen' => 'required',
                'nama_tim' => 'required',
                'nama_ketua_tim' => 'required',
                'no_hp' => 'required|numeric|min:10',
                'path_bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                "nama_peserta"    => "required|array|min:3",
                "nama_peserta.*"  => "required|string|distinct|min:3",
                'nickname' => 'required|array',
                'nickname.*' => 'required|distinct',
                'id_game' => 'required|array',
                'id_game.*' => 'required|distinct',
                'no_hp_peserta' => 'required|array',
                'no_hp_peserta.*' => 'required|numeric|min:10',
                'path_foto.0' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.4' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                'nama_peserta_cadangan' => 'required|min:3',
                'nickname_peserta_cadangan' => 'required',
                'id_game_peserta_cadangan' => 'required',
                'no_hp_peserta_cadangan' => 'required|numeric|min:10',
                'path_foto_peserta_cadangan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_tim.required' => 'Nama Tim harus diisi',
                'nama_ketua_tim.required' => 'Nama Ketua Tim harus diisi',
                'no_hp.required' => 'No. Telepon harus diisi',
                'no_hp.numeric' => 'No. Telepon harus berupa angka',
                'no_hp.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_bukti_pembayaran.required' => 'Bukti pembayaran harus diisi',
                'path_bukti_pembayaran.image' => 'Bukti pembayaran harus berupa gambar',

                'nama_peserta.*.required' => 'Nama Peserta harus diisi',
                'nama_peserta.*.distinct' => 'Nama Peserta sudah ada',
                'nickname.*.required' => 'Nickname harus diisi',
                'nickname.*.distinct' => 'Nickname sudah ada',
                'id_game.*.required' => 'ID Game harus diisi',
                'id_game.*.distinct' => 'ID Game sudah ada',
                'no_hp_peserta.*.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.*.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.*.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.0.required' => 'Foto harus diisi',
                'path_foto.0.image' => 'File harus berupa gambar',
                'path_foto.0.max' => 'Ukuran maksimum file 2MB',
                'path_foto.1.required' => 'Foto harus diisi',
                'path_foto.1.image' => 'File harus berupa gambar',
                'path_foto.1.max' => 'Ukuran maksimum file 2MB',
                'path_foto.2.required' => 'Foto harus diisi',
                'path_foto.2.image' => 'File harus berupa gambar',
                'path_foto.2.max' => 'Ukuran maksimum file 2MB',
                'path_foto.3.required' => 'Foto harus diisi',
                'path_foto.3.image' => 'File harus berupa gambar',
                'path_foto.3.max' => 'Ukuran maksimum file 2MB',
                'path_foto.4.required' => 'Foto harus diisi',
                'path_foto.4.image' => 'File harus berupa gambar',
                'path_foto.4.max' => 'Ukuran maksimum file 2MB',

                'nama_peserta_cadangan.required' => 'Nama Peserta harus diisi',
                'nickname_peserta_cadangan.required' => 'Nickname harus diisi',
                'id_game_peserta_cadangan.required' => 'ID Game harus diisi',
                'no_hp_peserta_cadangan.required' => 'No. Telepon harus diisi',
                'no_hp_peserta_cadangan.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta_cadangan.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto_peserta_cadangan.required' => 'Foto harus diisi',
                'path_foto_peserta_cadangan.image' => 'File harus berupa gambar',
                'path_foto_peserta_cadangan.max' => 'Ukuran maksimum file 2MB',
            ]
        );


        //penamaan file
        $image = $params['path_bukti_pembayaran'];
        $name = $params['nama_tim'] . '_' . time();
        $fileName = $name . '.' . $image->getClientOriginalExtension();

        //penyimpanan
        $folder = '/uploads/fcup/bukti_pembayaran';
        $filePath = $image->storeAs($folder, $fileName, 'public');

        $tim = TimMlUmum::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_tim' => $params['nama_tim'],
            'nama_ketua_tim' => $params['nama_ketua_tim'],
            'no_hp' => $params['no_hp'],
            'path_bukti_pembayaran' => $filePath,
        ]);

        return DB::transaction(function () use ($tim, $params, $request) {
            $ml_umum = $this->savePesertaMlUmum($tim, $params, $request);
            $this->savePesertaCadanganMlUmum($tim, $params);

            return $ml_umum;
        });
    }

    public function savePesertaMlUmum($tim, $params, $request)
    {
        $condition = $params['nama_peserta'];

        if ($request->hasFile('path_foto')) {
            foreach ($condition as $key => $value) {
                $peserta = new PesertaMlUmum;
                $peserta->id_tim = $tim->id;
                $peserta->nama_peserta = $params['nama_peserta'][$key];
                $peserta->nickname = $params['nickname'][$key];
                $peserta->id_game = $params['id_game'][$key];
                $peserta->no_hp_peserta = $params['no_hp_peserta'][$key];

                $images = [];
                $images[] = $params['path_foto'][$key];

                $name = $peserta->nama_peserta;
                $name = str_replace(" ", "_", $name);

                foreach ($images as $image) {
                    $fileName = $name . '.' . $image->getClientOriginalExtension();

                    $folder = '/uploads/fcup/foto';
                    $filePath = $image->storeAs($folder, $fileName, 'public');
                    $peserta->path_foto = $filePath;
                    // var_dump($peserta->path_foto);
                    $peserta->save();
                }
            }
        }
    }

    public function savePesertaCadanganMlUmum($tim, $params)
    {
        $nama_peserta = $params['nama_peserta_cadangan'];

        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto_peserta_cadangan'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        $peserta_cadangan = new PesertaCadanganMlUmum;
        $peserta_cadangan->id_tim = $tim->id;
        $peserta_cadangan->nama_peserta_cadangan = $params['nama_peserta_cadangan'];
        $peserta_cadangan->nickname_peserta_cadangan = $params['nickname_peserta_cadangan'];
        $peserta_cadangan->id_game_peserta_cadangan = $params['id_game_peserta_cadangan'];
        $peserta_cadangan->no_hp_peserta_cadangan = $params['no_hp_peserta_cadangan'];
        $peserta_cadangan->path_foto_peserta_cadangan = $filePath;
        $peserta_cadangan->save();
    }

    public function savePubg($request)
    {
        $params = $request->validate(
            [
                'id_turnamen' => 'required',
                'nama_tim' => 'required',
                'nama_ketua_tim' => 'required',
                'no_hp' => 'required|numeric|min:10',
                'path_bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                "nama_peserta"    => "required|array|min:3",
                "nama_peserta.*"  => "required|string|distinct|min:3",
                'nickname' => 'required|array',
                'nickname.*' => 'required|distinct',
                'id_game' => 'required|array',
                'id_game.*' => 'required|distinct',
                'no_hp_peserta' => 'required|array',
                'no_hp_peserta.*' => 'required|numeric|min:10',
                'path_foto.0' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.4' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                'nama_peserta_cadangan' => 'required|min:3',
                'nickname_peserta_cadangan' => 'required',
                'id_game_peserta_cadangan' => 'required',
                'no_hp_peserta_cadangan' => 'required|numeric|min:10',
                'path_foto_peserta_cadangan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_tim.required' => 'Nama Tim harus diisi',
                'nama_ketua_tim.required' => 'Nama Ketua Tim harus diisi',
                'no_hp.required' => 'No. Telepon harus diisi',
                'no_hp.numeric' => 'No. Telepon harus berupa angka',
                'no_hp.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_bukti_pembayaran.required' => 'Bukti pembayaran harus diisi',
                'path_bukti_pembayaran.image' => 'Bukti pembayaran harus berupa gambar',

                'nama_peserta.*.required' => 'Nama Peserta harus diisi',
                'nama_peserta.*.distinct' => 'Nama Peserta sudah ada',
                'nickname.*.required' => 'Nickname harus diisi',
                'nickname.*.distinct' => 'Nickname sudah ada',
                'id_game.*.required' => 'ID Game harus diisi',
                'id_game.*.distinct' => 'ID Game sudah ada',
                'no_hp_peserta.*.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.*.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.*.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.0.required' => 'Foto harus diisi',
                'path_foto.0.image' => 'File harus berupa gambar',
                'path_foto.0.max' => 'Ukuran maksimum file 2MB',
                'path_foto.1.required' => 'Foto harus diisi',
                'path_foto.1.image' => 'File harus berupa gambar',
                'path_foto.1.max' => 'Ukuran maksimum file 2MB',
                'path_foto.2.required' => 'Foto harus diisi',
                'path_foto.2.image' => 'File harus berupa gambar',
                'path_foto.2.max' => 'Ukuran maksimum file 2MB',
                'path_foto.3.required' => 'Foto harus diisi',
                'path_foto.3.image' => 'File harus berupa gambar',
                'path_foto.3.max' => 'Ukuran maksimum file 2MB',
                'path_foto.4.required' => 'Foto harus diisi',
                'path_foto.4.image' => 'File harus berupa gambar',
                'path_foto.4.max' => 'Ukuran maksimum file 2MB',

                'nama_peserta_cadangan.required' => 'Nama Peserta harus diisi',
                'nickname_peserta_cadangan.required' => 'Nickname harus diisi',
                'id_game_peserta_cadangan.required' => 'ID Game harus diisi',
                'no_hp_peserta_cadangan.required' => 'No. Telepon harus diisi',
                'no_hp_peserta_cadangan.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta_cadangan.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto_peserta_cadangan.required' => 'Foto harus diisi',
                'path_foto_peserta_cadangan.image' => 'File harus berupa gambar',
                'path_foto_peserta_cadangan.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        $image = $params['path_bukti_pembayaran'];
        $name = $params['nama_tim'] . '_' . time();
        $fileName = $name . '.' . $image->getClientOriginalExtension();

        $folder = '/uploads/fcup/bukti_pembayaran';
        $filePath = $image->storeAs($folder, $fileName, 'public');

        $tim = TimPubg::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_tim' => $params['nama_tim'],
            'nama_ketua_tim' => $params['nama_ketua_tim'],
            'no_hp' => $params['no_hp'],
            'path_bukti_pembayaran' => $filePath,
        ]);

        return DB::transaction(function () use ($tim, $params, $request) {
            $ml_umum = $this->savePesertaPubg($tim, $params, $request);
            $this->savePesertaCadanganPubg($tim, $params);

            return $ml_umum;
        });
    }

    public function savePesertaPubg($tim, $params, $request)
    {
        $condition = $params['nama_peserta'];

        if ($request->hasFile('path_foto')) {
            foreach ($condition as $key => $value) {
                $peserta = new PesertaPubg;
                $peserta->id_tim = $tim->id;
                $peserta->nama_peserta = $params['nama_peserta'][$key];
                $peserta->nickname = $params['nickname'][$key];
                $peserta->id_game = $params['id_game'][$key];
                $peserta->no_hp_peserta = $params['no_hp_peserta'][$key];

                $images = [];
                $images[] = $params['path_foto'][$key];

                $name = $peserta->nama_peserta;
                $name = str_replace(" ", "_", $name);

                foreach ($images as $image) {
                    $fileName = $name . '.' . $image->getClientOriginalExtension();

                    $folder = '/uploads/fcup/foto';
                    $filePath = $image->storeAs($folder, $fileName, 'public');
                    $peserta->path_foto = $filePath;
                    // var_dump($peserta->path_foto);
                    $peserta->save();
                }
            }
        }
    }

    public function savePesertaCadanganPubg($tim, $params)
    {
        $nama_peserta = $params['nama_peserta_cadangan'];

        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto_peserta_cadangan'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        $peserta_cadangan = new PesertaCadanganPubg;
        $peserta_cadangan->id_tim = $tim->id;
        $peserta_cadangan->nama_peserta_cadangan = $params['nama_peserta_cadangan'];
        $peserta_cadangan->nickname_peserta_cadangan = $params['nickname_peserta_cadangan'];
        $peserta_cadangan->id_game_peserta_cadangan = $params['id_game_peserta_cadangan'];
        $peserta_cadangan->no_hp_peserta_cadangan = $params['no_hp_peserta_cadangan'];
        $peserta_cadangan->path_foto_peserta_cadangan = $filePath;
        $peserta_cadangan->save();
    }

    public function saveDota($request)
    {
        $params = $request->validate(
            [
                'id_turnamen' => 'required',
                'nama_tim' => 'required',
                'nama_ketua_tim' => 'required',
                'no_hp' => 'required|numeric|min:10',
                'angkatan' => 'required|string',

                "nama_peserta"    => "required|array|min:3",
                "nama_peserta.*"  => "required|string|distinct|min:3",
                'npm' => 'required|array',
                'npm.*' => 'required|numeric|distinct',
                'link_steam' => 'required|array',
                'link_steam.*' => 'required|distinct',
                'id_game' => 'required|array',
                'id_game.*' => 'required|distinct',
                'no_hp_peserta' => 'required|array',
                'no_hp_peserta.*' => 'required|numeric|min:10',
                'path_foto.0' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.4' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                'nama_peserta_cadangan' => 'required|min:3',
                'npm_peserta_cadangan' => 'required|numeric',
                'link_steam_peserta_cadangan' => 'required',
                'id_game_peserta_cadangan' => 'required',
                'no_hp_peserta_cadangan' => 'required|numeric|min:10',
                'path_foto_peserta_cadangan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_tim.required' => 'Nama Tim harus diisi',
                'nama_ketua_tim.required' => 'Nama Ketua Tim harus diisi',
                'no_hp.required' => 'No. Telepon harus diisi',
                'no_hp.numeric' => 'No. Telepon harus berupa angka',
                'no_hp.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'angkatan.required' => 'Silahkan pilih angkatan',

                'nama_peserta.*.required' => 'Nama Peserta harus diisi',
                'nama_peserta.*.distinct' => 'Nama Peserta sudah ada',
                'npm.*.required' => 'NPM harus diisi',
                'npm.*.distinct' => 'NPM sudah ada',
                'npm.*.numeric' => 'NPM harus berupa angka',
                'link_steam.*.required' => 'Link Steam harus diisi',
                'link_steam.*.distinct' => 'Link Steam sudah ada',
                'id_game.*.required' => 'ID Game harus diisi',
                'id_game.*.distinct' => 'ID Game sudah ada',
                'no_hp_peserta.*.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.*.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.*.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.0.required' => 'Foto harus diisi',
                'path_foto.0.image' => 'File harus berupa gambar',
                'path_foto.0.max' => 'Ukuran maksimum file 2MB',
                'path_foto.1.required' => 'Foto harus diisi',
                'path_foto.1.image' => 'File harus berupa gambar',
                'path_foto.1.max' => 'Ukuran maksimum file 2MB',
                'path_foto.2.required' => 'Foto harus diisi',
                'path_foto.2.image' => 'File harus berupa gambar',
                'path_foto.2.max' => 'Ukuran maksimum file 2MB',
                'path_foto.3.required' => 'Foto harus diisi',
                'path_foto.3.image' => 'File harus berupa gambar',
                'path_foto.3.max' => 'Ukuran maksimum file 2MB',
                'path_foto.4.required' => 'Foto harus diisi',
                'path_foto.4.image' => 'File harus berupa gambar',
                'path_foto.4.max' => 'Ukuran maksimum file 2MB',

                'nama_peserta_cadangan.required' => 'Nama Peserta harus diisi',
                'npm_peserta_cadangan.required' => 'NPM harus diisi',
                'npm_peserta_cadangan.numeric' => 'NPM harus berupa angka',
                'link_steam_peserta_cadangan.required' => 'Link Steam harus diisi',
                'id_game_peserta_cadangan.required' => 'ID Game harus diisi',
                'no_hp_peserta_cadangan.required' => 'No. Telepon harus diisi',
                'no_hp_peserta_cadangan.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta_cadangan.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto_peserta_cadangan.required' => 'Foto harus diisi',
                'path_foto_peserta_cadangan.image' => 'File harus berupa gambar',
                'path_foto_peserta_cadangan.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        $tim = TimDota::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_tim' => $params['nama_tim'],
            'nama_ketua_tim' => $params['nama_ketua_tim'],
            'no_hp' => $params['no_hp'],
            'angkatan' => $params['angkatan'],
        ]);

        return DB::transaction(function () use ($tim, $params, $request) {
            $ml_umum = $this->savePesertaDota($tim, $params, $request);
            $this->savePesertaCadanganDota($tim, $params);

            return $ml_umum;
        });
    }

    public function savePesertaDota($tim, $params, $request)
    {
        $condition = $params['nama_peserta'];

        if ($request->hasFile('path_foto')) {
            foreach ($condition as $key => $value) {
                $peserta = new PesertaDota;
                $peserta->id_tim = $tim->id;
                $peserta->nama_peserta = $params['nama_peserta'][$key];
                $peserta->npm = $params['npm'][$key];
                $peserta->link_steam = $params['link_steam'][$key];
                $peserta->id_game = $params['id_game'][$key];
                $peserta->no_hp_peserta = $params['no_hp_peserta'][$key];

                $images = [];
                $images[] = $params['path_foto'][$key];

                $name = $peserta->nama_peserta;
                $name = str_replace(" ", "_", $name);

                foreach ($images as $image) {
                    $fileName = $name . '.' . $image->getClientOriginalExtension();

                    $folder = '/uploads/fcup/foto';
                    $filePath = $image->storeAs($folder, $fileName, 'public');
                    $peserta->path_foto = $filePath;
                    // var_dump($peserta->path_foto);
                    $peserta->save();
                }
            }
        }
    }

    public function savePesertaCadanganDota($tim, $params)
    {
        $nama_peserta = $params['nama_peserta_cadangan'];

        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto_peserta_cadangan'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        $peserta_cadangan = new PesertaCadanganDota;
        $peserta_cadangan->id_tim = $tim->id;
        $peserta_cadangan->nama_peserta_cadangan = $params['nama_peserta_cadangan'];
        $peserta_cadangan->npm_peserta_cadangan = $params['npm_peserta_cadangan'];
        $peserta_cadangan->link_steam_peserta_cadangan = $params['link_steam_peserta_cadangan'];
        $peserta_cadangan->id_game_peserta_cadangan = $params['id_game_peserta_cadangan'];
        $peserta_cadangan->no_hp_peserta_cadangan = $params['no_hp_peserta_cadangan'];
        $peserta_cadangan->path_foto_peserta_cadangan = $filePath;
        $peserta_cadangan->save();
    }

    public function saveValorant($request)
    {
        $params = $request->validate(
            [
                'id_turnamen' => 'required',
                'nama_tim' => 'required',
                'nama_ketua_tim' => 'required',
                'no_hp' => 'required|numeric|min:10',
                'path_bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'angkatan' => 'required',

                "nama_peserta"    => "required|array|min:3",
                "nama_peserta.*"  => "required|string|distinct|min:3",
                'npm' => 'required|array',
                'npm.*' => 'required|numeric|distinct',
                'nickname' => 'required|array',
                'nickname.*' => 'required|distinct',
                'id_game' => 'required|array',
                'id_game.*' => 'required|distinct',
                'no_hp_peserta' => 'required|array',
                'no_hp_peserta.*' => 'required|numeric|min:10',
                'path_foto.0' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.4' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                'nama_peserta_cadangan' => 'required|min:3',
                'npm_peserta_cadangan' => 'required|numeric',
                'nickname_peserta_cadangan' => 'required',
                'id_game_peserta_cadangan' => 'required',
                'no_hp_peserta_cadangan' => 'required|numeric|min:10',
                'path_foto_peserta_cadangan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_tim.required' => 'Nama Tim harus diisi',
                'nama_ketua_tim.required' => 'Nama Ketua Tim harus diisi',
                'no_hp.required' => 'No. Telepon harus diisi',
                'no_hp.numeric' => 'No. Telepon harus berupa angka',
                'no_hp.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_bukti_pembayaran.required' => 'Bukti pembayaran harus diisi',
                'path_bukti_pembayaran.image' => 'Bukti pembayaran harus berupa gambar',
                'angkatan' => 'Angkatan harus dipilih',

                'nama_peserta.*.required' => 'Nama Peserta harus diisi',
                'nama_peserta.*.distinct' => 'Nama Peserta sudah ada',
                'npm.*.required' => 'NPM harus diisi',
                'npm.*.distinct' => 'NPM sudah ada',
                'npm.*.numeric' => 'NPM harus berupa angka',
                'nickname.*.required' => 'Nickname harus diisi',
                'nickname.*.distinct' => 'Nickname sudah ada',
                'id_game.*.required' => 'ID Game harus diisi',
                'id_game.*.distinct' => 'ID Game sudah ada',
                'no_hp_peserta.*.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.*.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.*.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.0.required' => 'Foto harus diisi',
                'path_foto.0.image' => 'File harus berupa gambar',
                'path_foto.0.max' => 'Ukuran maksimum file 2MB',
                'path_foto.1.required' => 'Foto harus diisi',
                'path_foto.1.image' => 'File harus berupa gambar',
                'path_foto.1.max' => 'Ukuran maksimum file 2MB',
                'path_foto.2.required' => 'Foto harus diisi',
                'path_foto.2.image' => 'File harus berupa gambar',
                'path_foto.2.max' => 'Ukuran maksimum file 2MB',
                'path_foto.3.required' => 'Foto harus diisi',
                'path_foto.3.image' => 'File harus berupa gambar',
                'path_foto.3.max' => 'Ukuran maksimum file 2MB',
                'path_foto.4.required' => 'Foto harus diisi',
                'path_foto.4.image' => 'File harus berupa gambar',
                'path_foto.4.max' => 'Ukuran maksimum file 2MB',

                'nama_peserta_cadangan.required' => 'Nama Peserta harus diisi',
                'npm_peserta_cadangan.required' => 'NPM harus diisi',
                'npm_peserta_cadangan.numeric' => 'NPM harus berupa angka',
                'nickname_peserta_cadangan.required' => 'Nickname harus diisi',
                'id_game_peserta_cadangan.required' => 'ID Game harus diisi',
                'no_hp_peserta_cadangan.required' => 'No. Telepon harus diisi',
                'no_hp_peserta_cadangan.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta_cadangan.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto_peserta_cadangan.required' => 'Foto harus diisi',
                'path_foto_peserta_cadangan.image' => 'File harus berupa gambar',
                'path_foto_peserta_cadangan.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        $image = $params['path_bukti_pembayaran'];
        $name = $params['nama_tim'] . '_' . time();
        $fileName = $name . '.' . $image->getClientOriginalExtension();

        $folder = '/uploads/fcup/bukti_pembayaran';
        $filePath = $image->storeAs($folder, $fileName, 'public');

        $tim = TimValorant::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_tim' => $params['nama_tim'],
            'nama_ketua_tim' => $params['nama_ketua_tim'],
            'no_hp' => $params['no_hp'],
            'path_bukti_pembayaran' => $filePath,
            'angkatan' => $params['angkatan']
        ]);

        return DB::transaction(function () use ($tim, $params, $request) {
            $ml_umum = $this->savePesertaValorant($tim, $params, $request);
            $this->savePesertaCadanganValorant($tim, $params);

            return $ml_umum;
        });
    }

    public function savePesertaValorant($tim, $params, $request)
    {
        $condition = $params['nama_peserta'];

        if ($request->hasFile('path_foto')) {
            foreach ($condition as $key => $value) {
                $peserta = new PesertaValorant;
                $peserta->id_tim = $tim->id;
                $peserta->nama_peserta = $params['nama_peserta'][$key];
                $peserta->npm = $params['npm'][$key];
                $peserta->nickname = $params['nickname'][$key];
                $peserta->id_game = $params['id_game'][$key];
                $peserta->no_hp_peserta = $params['no_hp_peserta'][$key];

                $images = [];
                $images[] = $params['path_foto'][$key];

                $name = $peserta->nama_peserta;
                $name = str_replace(" ", "_", $name);

                foreach ($images as $image) {
                    $fileName = $name . '.' . $image->getClientOriginalExtension();

                    $folder = '/uploads/fcup/foto';
                    $filePath = $image->storeAs($folder, $fileName, 'public');
                    $peserta->path_foto = $filePath;
                    // var_dump($peserta->path_foto);
                    $peserta->save();
                }
            }
        }
    }

    public function savePesertaCadanganValorant($tim, $params)
    {
        $nama_peserta = $params['nama_peserta_cadangan'];

        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto_peserta_cadangan'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        $peserta_cadangan = new PesertaCadanganValorant;
        $peserta_cadangan->id_tim = $tim->id;
        $peserta_cadangan->nama_peserta_cadangan = $params['nama_peserta_cadangan'];
        $peserta_cadangan->npm_peserta_cadangan = $params['npm_peserta_cadangan'];
        $peserta_cadangan->nickname_peserta_cadangan = $params['nickname_peserta_cadangan'];
        $peserta_cadangan->id_game_peserta_cadangan = $params['id_game_peserta_cadangan'];
        $peserta_cadangan->no_hp_peserta_cadangan = $params['no_hp_peserta_cadangan'];
        $peserta_cadangan->path_foto_peserta_cadangan = $filePath;
        $peserta_cadangan->save();
    }

    public function saveMlPutri($request)
    {
        $params = $request->validate(
            [
                'id_turnamen' => 'required',
                'nama_tim' => 'required',
                'nama_ketua_tim' => 'required',
                'no_hp' => 'required|numeric|min:10',
                'angkatan' => 'required|string',

                "nama_peserta"    => "required|array|min:3",
                "nama_peserta.*"  => "required|string|distinct|min:3",
                'npm' => 'required|array',
                'npm.*' => 'required|numeric|distinct',
                'nickname' => 'required|array',
                'nickname.*' => 'required|distinct',
                'id_game' => 'required|array',
                'id_game.*' => 'required|distinct',
                'no_hp_peserta' => 'required|array',
                'no_hp_peserta.*' => 'required|numeric|min:10',
                'path_foto.0' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.4' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                'nama_peserta_cadangan' => 'required|min:3',
                'npm_peserta_cadangan' => 'required|numeric',
                'nickname_peserta_cadangan' => 'required',
                'id_game_peserta_cadangan' => 'required',
                'no_hp_peserta_cadangan' => 'required|numeric|min:10',
                'path_foto_peserta_cadangan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_tim.required' => 'Nama Tim harus diisi',
                'nama_ketua_tim.required' => 'Nama Ketua Tim harus diisi',
                'no_hp.required' => 'No. Telepon harus diisi',
                'no_hp.numeric' => 'No. Telepon harus berupa angka',
                'no_hp.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'angkatan.required' => 'Silahkan pilih angkatan',

                'nama_peserta.*.required' => 'Nama Peserta harus diisi',
                'nama_peserta.*.distinct' => 'Nama Peserta sudah ada',
                'npm.*.required' => 'NPM harus diisi',
                'npm.*.distinct' => 'NPM sudah ada',
                'npm.*.numeric' => 'NPM harus berupa angka',
                'nickname.*.required' => 'Link Steam harus diisi',
                'nickname.*.distinct' => 'Link Steam sudah ada',
                'id_game.*.required' => 'ID Game harus diisi',
                'id_game.*.distinct' => 'ID Game sudah ada',
                'no_hp_peserta.*.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.*.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.*.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.0.required' => 'Foto harus diisi',
                'path_foto.0.image' => 'File harus berupa gambar',
                'path_foto.0.max' => 'Ukuran maksimum file 2MB',
                'path_foto.1.required' => 'Foto harus diisi',
                'path_foto.1.image' => 'File harus berupa gambar',
                'path_foto.1.max' => 'Ukuran maksimum file 2MB',
                'path_foto.2.required' => 'Foto harus diisi',
                'path_foto.2.image' => 'File harus berupa gambar',
                'path_foto.2.max' => 'Ukuran maksimum file 2MB',
                'path_foto.3.required' => 'Foto harus diisi',
                'path_foto.3.image' => 'File harus berupa gambar',
                'path_foto.3.max' => 'Ukuran maksimum file 2MB',
                'path_foto.4.required' => 'Foto harus diisi',
                'path_foto.4.image' => 'File harus berupa gambar',
                'path_foto.4.max' => 'Ukuran maksimum file 2MB',

                'nama_peserta_cadangan.required' => 'Nama Peserta harus diisi',
                'npm_peserta_cadangan.required' => 'NPM harus diisi',
                'npm_peserta_cadangan.numeric' => 'NPM harus berupa angka',
                'nickname_peserta_cadangan.required' => 'Link Steam harus diisi',
                'id_game_peserta_cadangan.required' => 'ID Game harus diisi',
                'no_hp_peserta_cadangan.required' => 'No. Telepon harus diisi',
                'no_hp_peserta_cadangan.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta_cadangan.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto_peserta_cadangan.required' => 'Foto harus diisi',
                'path_foto_peserta_cadangan.image' => 'File harus berupa gambar',
                'path_foto_peserta_cadangan.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        $tim = TimMlPutri::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_tim' => $params['nama_tim'],
            'nama_ketua_tim' => $params['nama_ketua_tim'],
            'no_hp' => $params['no_hp'],
            'angkatan' => $params['angkatan'],
        ]);

        return DB::transaction(function () use ($tim, $params, $request) {
            $ml_umum = $this->savePesertaMlPutri($tim, $params, $request);
            $this->savePesertaCadanganMlPutri($tim, $params);

            return $ml_umum;
        });
    }

    public function savePesertaMlPutri($tim, $params, $request)
    {
        $condition = $params['nama_peserta'];

        if ($request->hasFile('path_foto')) {
            foreach ($condition as $key => $value) {
                $peserta = new PesertaMlPutri;
                $peserta->id_tim = $tim->id;
                $peserta->nama_peserta = $params['nama_peserta'][$key];
                $peserta->npm = $params['npm'][$key];
                $peserta->nickname = $params['nickname'][$key];
                $peserta->id_game = $params['id_game'][$key];
                $peserta->no_hp_peserta = $params['no_hp_peserta'][$key];

                $images = [];
                $images[] = $params['path_foto'][$key];

                $name = $peserta->nama_peserta;
                $name = str_replace(" ", "_", $name);

                foreach ($images as $image) {
                    $fileName = $name . '.' . $image->getClientOriginalExtension();

                    $folder = '/uploads/fcup/foto';
                    $filePath = $image->storeAs($folder, $fileName, 'public');
                    $peserta->path_foto = $filePath;
                    // var_dump($peserta->path_foto);
                    $peserta->save();
                }
            }
        }
    }

    public function savePesertaCadanganMlPutri($tim, $params)
    {
        $nama_peserta = $params['nama_peserta_cadangan'];

        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto_peserta_cadangan'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        $peserta_cadangan = new PesertaCadanganMlPutri;
        $peserta_cadangan->id_tim = $tim->id;
        $peserta_cadangan->nama_peserta_cadangan = $params['nama_peserta_cadangan'];
        $peserta_cadangan->npm_peserta_cadangan = $params['npm_peserta_cadangan'];
        $peserta_cadangan->nickname_peserta_cadangan = $params['nickname_peserta_cadangan'];
        $peserta_cadangan->id_game_peserta_cadangan = $params['id_game_peserta_cadangan'];
        $peserta_cadangan->no_hp_peserta_cadangan = $params['no_hp_peserta_cadangan'];
        $peserta_cadangan->path_foto_peserta_cadangan = $filePath;
        $peserta_cadangan->save();
    }

    public function savePb($request)
    {
        // dd($request->except('_token'));
        $params = $request->validate(
            [
                'id_turnamen' => 'required',
                'nama_tim' => 'required',
                'nama_ketua_tim' => 'required',
                'angkatan' => 'required',
                'no_hp' => 'required|numeric|min:10',

                "nama_peserta"    => "required|array|min:3",
                "nama_peserta.*"  => "required|string|distinct|min:3",
                'npm' => 'required|array',
                'npm.*' => 'required|numeric|distinct',
                'nickname' => 'required|array',
                'nickname.*' => 'required|distinct',
                'no_hp_peserta' => 'required|array',
                'no_hp_peserta.*' => 'required|numeric|min:10',
                'path_foto.0' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'path_foto.4' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                'nama_peserta_cadangan' => 'required|min:3',
                'npm_peserta_cadangan' => 'required|numeric',
                'nickname_peserta_cadangan' => 'required',
                'no_hp_peserta_cadangan' => 'required|numeric|min:10',
                'path_foto_peserta_cadangan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_tim.required' => 'Nama Tim harus diisi',
                'nama_ketua_tim.required' => 'Nama Ketua Tim harus diisi',
                'no_hp.required' => 'No. Telepon harus diisi',
                'no_hp.numeric' => 'No. Telepon harus berupa angka',
                'no_hp.min' => 'No. Telepon minimal memiliki panjang 10 angka',

                'nama_peserta.*.required' => 'Nama Peserta harus diisi',
                'nama_peserta.*.distinct' => 'Nama Peserta sudah ada',
                'npm.*.required' => 'NPM harus diisi',
                'npm.*.distinct' => 'NPM sudah ada',
                'npm.*.numeric' => 'NPM harus berupa angka',
                'nickname.*.required' => 'Nickname harus diisi',
                'nickname.*.distinct' => 'Nickname sudah ada',
                'no_hp_peserta.*.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.*.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.*.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.0.required' => 'Foto harus diisi',
                'path_foto.0.image' => 'File harus berupa gambar',
                'path_foto.0.max' => 'Ukuran maksimum file 2MB',
                'path_foto.1.required' => 'Foto harus diisi',
                'path_foto.1.image' => 'File harus berupa gambar',
                'path_foto.1.max' => 'Ukuran maksimum file 2MB',
                'path_foto.2.required' => 'Foto harus diisi',
                'path_foto.2.image' => 'File harus berupa gambar',
                'path_foto.2.max' => 'Ukuran maksimum file 2MB',
                'path_foto.3.required' => 'Foto harus diisi',
                'path_foto.3.image' => 'File harus berupa gambar',
                'path_foto.3.max' => 'Ukuran maksimum file 2MB',
                'path_foto.4.required' => 'Foto harus diisi',
                'path_foto.4.image' => 'File harus berupa gambar',
                'path_foto.4.max' => 'Ukuran maksimum file 2MB',

                'nama_peserta_cadangan.required' => 'Nama Peserta harus diisi',
                'npm_peserta_cadangan.required' => 'NPM harus diisi',
                'npm_peserta_cadangan.numeric' => 'NPM harus berupa angka',
                'nickname_peserta_cadangan.required' => 'Nickname harus diisi',
                'no_hp_peserta_cadangan.required' => 'No. Telepon harus diisi',
                'no_hp_peserta_cadangan.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta_cadangan.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto_peserta_cadangan.required' => 'Foto harus diisi',
                'path_foto_peserta_cadangan.image' => 'File harus berupa gambar',
                'path_foto_peserta_cadangan.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        $tim = TimPb::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_tim' => $params['nama_tim'],
            'nama_ketua_tim' => $params['nama_ketua_tim'],
            'no_hp' => $params['no_hp'],
            'angkatan' => $params['angkatan'],
        ]);

        return DB::transaction(function () use ($tim, $params, $request) {
            $ml_umum = $this->savePesertaPb($tim, $params, $request);
            $this->savePesertaCadanganPb($tim, $params);

            return $ml_umum;
        });
    }

    public function savePesertaPb($tim, $params, $request)
    {
        $condition = $params['nama_peserta'];

        if ($request->hasFile('path_foto')) {
            foreach ($condition as $key => $value) {
                $peserta = new PesertaPb();
                $peserta->id_tim = $tim->id;
                $peserta->nama_peserta = $params['nama_peserta'][$key];
                $peserta->npm = $params['npm'][$key];
                $peserta->nickname = $params['nickname'][$key];
                $peserta->no_hp_peserta = $params['no_hp_peserta'][$key];

                $images = [];
                $images[] = $params['path_foto'][$key];

                $name = $peserta->nama_peserta;
                $name = str_replace(" ", "_", $name);

                foreach ($images as $image) {
                    $fileName = $name . '.' . $image->getClientOriginalExtension();

                    $folder = '/uploads/fcup/foto';
                    $filePath = $image->storeAs($folder, $fileName, 'public');
                    $peserta->path_foto = $filePath;
                    // var_dump($peserta->path_foto);
                    $peserta->save();
                }
            }
        }
    }

    public function savePesertaCadanganPb($tim, $params)
    {
        $nama_peserta = $params['nama_peserta_cadangan'];

        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto_peserta_cadangan'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        $peserta_cadangan = new PesertaCadanganPb();
        $peserta_cadangan->id_tim = $tim->id;
        $peserta_cadangan->nama_peserta_cadangan = $params['nama_peserta_cadangan'];
        $peserta_cadangan->npm_peserta_cadangan = $params['npm_peserta_cadangan'];
        $peserta_cadangan->nickname_peserta_cadangan = $params['nickname_peserta_cadangan'];
        $peserta_cadangan->no_hp_peserta_cadangan = $params['no_hp_peserta_cadangan'];
        $peserta_cadangan->path_foto_peserta_cadangan = $filePath;
        $peserta_cadangan->save();
    }


    // Individu
    public function saveCaturPutra($request)
    {
        $params = $request->validate(
            [
                'nama_peserta' => 'required|min:3',
                'npm' => 'required|numeric',
                'nickname' => 'required',
                'kelas' => 'required',
                'angkatan' => 'required',
                'prodi' => 'required',
                'no_hp_peserta' => 'required|numeric|min:10',
                'path_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_peserta.required' => 'Nama Peserta harus diisi',
                'npm.required' => 'NPM harus diisi',
                'npm.numeric' => 'NPM harus berupa angka',
                'nickname.required' => 'Nickname harus diisi',
                'kelas.required' => 'Kelas harus diisi',
                'angkatan.required' => 'Angkatan harus diisi',
                'prodi.required' => 'Prodi harus diisi',
                'no_hp_peserta.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.required' => 'Foto harus diisi',
                'path_foto.image' => 'File harus berupa gambar',
                'path_foto.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        // dd($params);
        //nama peserta untuk foto
        $nama_peserta = $params['nama_peserta'];

        //penamaan file untuk foto
        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        //folder samain aja
        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        PesertaCaturPutra::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_peserta' => $params['nama_peserta'],
            'npm' => $params['npm'],
            'nickname' => $params['nickname'],
            'kelas' => $params['kelas'],
            'angkatan' => $params['angkatan'],
            'prodi' => $params['prodi'],
            'no_hp_peserta' => $params['no_hp_peserta'],
            'path_foto' => $filePath,
        ]);
    }

    public function saveCaturPutri($request)
    {
        $params = $request->validate(
            [
                'nama_peserta' => 'required|min:3',
                'npm' => 'required|numeric',
                'nickname' => 'required',
                'kelas' => 'required',
                'angkatan' => 'required',
                'prodi' => 'required',
                'no_hp_peserta' => 'required|numeric|min:10',
                'path_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_peserta.required' => 'Nama Peserta harus diisi',
                'npm.required' => 'NPM harus diisi',
                'npm.numeric' => 'NPM harus berupa angka',
                'nickname.required' => 'Nickname harus diisi',
                'kelas.required' => 'Kelas harus diisi',
                'angkatan.required' => 'Angkatan harus diisi',
                'prodi.required' => 'Prodi harus diisi',
                'no_hp_peserta.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.required' => 'Foto harus diisi',
                'path_foto.image' => 'File harus berupa gambar',
                'path_foto.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        // dd($params);
        //nama peserta untuk foto
        $nama_peserta = $params['nama_peserta'];

        //penamaan file untuk foto
        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        //folder samain aja
        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        PesertaCaturPutri::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_peserta' => $params['nama_peserta'],
            'npm' => $params['npm'],
            'nickname' => $params['nickname'],
            'kelas' => $params['kelas'],
            'angkatan' => $params['angkatan'],
            'prodi' => $params['prodi'],
            'no_hp_peserta' => $params['no_hp_peserta'],
            'path_foto' => $filePath,
        ]);
    }

    public function saveMc($request)
    {
        $params = $request->validate(
            [
                'nama_peserta' => 'required|min:3',
                'npm' => 'required|numeric',
                'nickname' => 'required',
                'id_game' => 'required',
                'kelas' => 'required',
                'angkatan' => 'required',
                'prodi' => 'required',
                'no_hp_peserta' => 'required|numeric|min:10',
                'path_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'nama_peserta.required' => 'Nama Peserta harus diisi',
                'npm.required' => 'NPM harus diisi',
                'npm.numeric' => 'NPM harus berupa angka',
                'nickname.required' => 'Nickname harus diisi',
                'id_game.required' => 'ID Game harus diisi',
                'kelas.required' => 'Kelas harus diisi',
                'angkatan.required' => 'Angkatan harus diisi',
                'prodi.required' => 'Prodi harus diisi',
                'no_hp_peserta.required' => 'No. Telepon harus diisi',
                'no_hp_peserta.numeric' => 'No. Telepon harus berupa angka',
                'no_hp_peserta.min' => 'No. Telepon minimal memiliki panjang 10 angka',
                'path_foto.required' => 'Foto harus diisi',
                'path_foto.image' => 'File harus berupa gambar',
                'path_foto.max' => 'Ukuran maksimum file 2MB',
            ]
        );

        // dd($params);
        //nama peserta untuk foto
        $nama_peserta = $params['nama_peserta'];

        //penamaan file untuk foto
        $name = $nama_peserta . '_' . time();
        $path_foto = $params['path_foto'];
        $fileName = $name . '.' . $path_foto->getClientOriginalExtension();

        //folder samain aja
        $folder = '/uploads/fcup/foto';
        $filePath = $path_foto->storeAs($folder, $fileName, 'public');

        PesertaMc::create([
            'id_turnamen' => $request->id_turnamen,
            'nama_peserta' => $params['nama_peserta'],
            'npm' => $params['npm'],
            'nickname' => $params['nickname'],
            'id_game' => $params['id_game'],
            'kelas' => $params['kelas'],
            'angkatan' => $params['angkatan'],
            'prodi' => $params['prodi'],
            'no_hp_peserta' => $params['no_hp_peserta'],
            'path_foto' => $filePath,
        ]);
    }
}
