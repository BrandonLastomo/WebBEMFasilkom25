<?php

namespace App\Http\Controllers\PKKMB;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Maba;
use App\Models\Rundown;
use App\Models\TugasIndividuMaba;
use App\Models\TugasKelompokMaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PkkmbController extends Controller
{
    public function __construct()
    {
        $this->data['prodi'] = Maba::prodi();

        $this->middleware('auth:maba');
    }

    public function index()
    {
        $this->data['informasis'] = Informasi::orderBy('created_at', 'ASC')->get();

        return view('pages.pkkmb.index', $this->data);
    }

    public function absen()
    {
        $this->data['maba'] = Maba::where('id', Auth::user()->id)->first();

        return view('pages.pkkmb.absen', $this->data);
    }

    public function saveAbsen(Request $request)
    {
        $maba = Maba::where('id', Auth::user()->id)->first();

        if ($request->has('absen_hari_pertama')) {
            $validator = \Validator::make(
                $request->all(),
                [
                    'absen_hari_pertama' => 'required',
                    'nama_kelompok' => 'required|string|max:255',
                    'foto_hari_pertama' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ],
                [
                    'nama_kelompok.required' => 'Nama kelompok harus diisi',
                    'foto_hari_pertama.required' => 'Harus mencantumkan bukti kehadiran',
                    'foto_hari_pertama.image' => 'File harus berupa gambar',
                    'foto_hari_pertama.max' => 'Ukuran maksimum file 2 MB',
                ]
            );

            if (!$validator->passes()) {
                return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
            } else {
                if ($request->hasFile('foto_hari_pertama')) {
                    $image = $request->file('foto_hari_pertama');
                    $name = Auth::user()->nama . '_' . time();
                    $fileName = $name . '.' . $image->getClientOriginalExtension();

                    $folder = '/uploads/pkkmb/maba/absen-1';
                    $filePath = $image->storeAs($folder, $fileName, 'public');

                    if ($filePath) {
                        $maba->update([
                            'absen_hari_pertama' => $request->absen_hari_pertama,
                            'nama_kelompok' => $request->nama_kelompok,
                            'foto_hari_pertama' => $filePath,
                        ]);
                        return response()->json(['code' => 1, 'msg' => 'ok']);
                    }
                }
            }
        }

        $validator = \Validator::make(
            $request->all(),
            [
                'absen_hari_kedua' => 'required',
                'foto_hari_kedua' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'foto_hari_kedua.required' => 'Harus mencantumkan bukti kehadiran',
                'foto_hari_kedua.image' => 'File harus berupa gambar',
                'foto_hari_kedua.max' => 'Ukuran maksimum file 2 MB',
            ]
        );

        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            if ($request->hasFile('foto_hari_kedua')) {
                $image = $request->file('foto_hari_kedua');
                $name = Auth::user()->nama . '_' . time();
                $fileName = $name . '.' . $image->getClientOriginalExtension();

                $folder = '/uploads/pkkmb/maba/absen-2';
                $filePath = $image->storeAs($folder, $fileName, 'public');

                if ($filePath) {
                    $maba->update([
                        'absen_hari_kedua' => $request->absen_hari_kedua,
                        'foto_hari_kedua' => $filePath,
                    ]);
                    return response()->json(['code' => 1, 'msg' => 'ok']);
                }
            }
        }
    }

    public function mars()
    {
        return view('pages.pkkmb.mars');
    }

    public function tugas()
    {
        return view('pages.pkkmb.tugas', $this->data);
    }

    public function saveTugasIndividu(Request $request)
    {
        $params = $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'nama_kelompok_individu' => 'required|string|max:255',
                'prodi' => 'required|string|max:255',
                'link_video_individu' => 'required|string|max:255',
            ],
            [
                'nama_lengkap.required' => 'Nama harus diisi',
                'nama_kelompok_individu.required' => 'Nama kelompok harus diisi',
                'prodi.required' => 'Silakan pilih program studi',
                'link_video_individu.required' => 'Link video harus diisi',
            ]
        );

        TugasIndividuMaba::create([
            'nama_lengkap' => $params['nama_lengkap'],
            'nama_kelompok_individu' => $params['nama_kelompok_individu'],
            'prodi' => $params['prodi'],
            'link_video_individu' => $params['link_video_individu'],
            'id_maba' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Tugas individu berhasil dikumpulkan');
    }

    public function saveTugasKelompok(Request $request)
    {
        $params = $request->validate(
            [
                'nama_kelompok' => 'required|string|max:255',
                'nama_anggota' => 'required|string',
                'link_video' => 'required|string|max:255',
            ],
            [
                'nama_kelompok.required' => 'Nama kelompok harus diisi',
                'nama_anggota.required' => 'Nama anggota harus diisi',
                'link_video.required' => 'Link video harus diisi',
            ]
        );

        TugasKelompokMaba::create([
            'nama_kelompok' => $params['nama_kelompok'],
            'nama_anggota' => $params['nama_anggota'],
            'link_video' => $params['link_video'],
            'id_maba' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Tugas kelompok berhasil dikumpulkan');
    }

    public function peraturan()
    {
        return view('pages.pkkmb.peraturan');
    }

    public function tata_tertib()
    {
        return view('pages.pkkmb.tata-tertib');
    }

    public function kelompok()
    {
        return view('pages.pkkmb.kelompok');
    }

    public function rundown()
    {
        $this->data['rundowns'] = Rundown::orderBy('jam', 'ASC')->get();

        return view('pages.pkkmb.rundown', $this->data);
    }

    public function detailInformation($slug)
    {
        $this->data['informasi'] = Informasi::where('slug', $slug)->first();

        return view('pages.pkkmb.informasi', $this->data);
    }
}
