<?php

namespace App\Http\Controllers\PKM;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnggotaRequest;
use App\Http\Requests\ProposalRequest;
use App\Models\Anggota;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Str;
use Storage;
use Response;

class PengajuanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentPkmMenu'] = 'pengajuan';
        $this->data['currentPkmSubMenu'] = '';

        $this->data['prodi'] = Anggota::prodi();
        $this->data['tahun'] = Anggota::tahun();
        $this->data['status'] = Anggota::status();
        $this->data['jenis'] = Proposal::jenis();

        $this->middleware(['role:User', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['proposals'] = Proposal::forUser(Auth::user())->orderBy('jenis', 'ASC')->get();

        return view('pages.aplikasi-publik.pkm.pengajuan.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $proposal = Proposal::findOrFail($id);

        $this->data['user'] = Auth::user();
        $this->data['proposal'] = $proposal;

        return view('pages.aplikasi-publik.pkm.pengajuan.proposal.registrasi', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMember(AnggotaRequest $request, $id)
    {
        $params = $request->validated();
        $proposal = Proposal::findOrFail($id);

        $params['id_user'] = Auth::user()->id;
        $params['id_proposal'] = $proposal->id;

        if (Anggota::create($params)) {
            return redirect()->route('pengajuan.edit', $proposal->id)->with('success', 'Anggota berhasil ditambahkan');
        }

        return redirect()->route('pengajuan.edit', $proposal->id)->with('error', 'Anggota gagal ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->except('_token');
        $params['slug'] = Str::slug($params['judul']);
        $params['id_user'] = Auth::user()->id;

        if (Proposal::create($params)) {
            return redirect()->route('pengajuan.index')->with('success', 'Proposal berhasil ditambahkan');
        }

        return redirect()->route('pengajuan.index')->with('error', 'Proposal gagal ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proposal = Proposal::where('id', $id)->first();

        $filePath = $proposal->path;

        return response()->file(public_path('storage/' . $filePath));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editMember($id)
    {
        $anggota = Anggota::findOrFail($id);

        $this->data['anggota'] = $anggota;

        return view('pages.aplikasi-publik.pkm.pengajuan.proposal.registrasi', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposal = Proposal::findOrFail($id);
        $anggotas = Anggota::forProposal($proposal)->orderBy('status', 'DESC')->get();

        $this->data['proposal'] = $proposal;
        $this->data['anggotas'] = $anggotas;

        return view('pages.aplikasi-publik.pkm.pengajuan.proposal.edit-proposal', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateMember(AnggotaRequest $request, $id)
    {
        $params = $request->validated();
        $anggota = Anggota::findOrFail($id);

        $params['id_user'] = Auth::user()->id;
        $params['id_proposal'] = $anggota->id_proposal;
        $params['anggota'] = $anggota;

        if ($anggota->update($params)) {
            return redirect()->route('pengajuan.edit', $anggota->id_proposal)->with('success', 'Anggota berhasil ditambahkan');
        }

        return redirect()->route('pengajuan.edit', $anggota->id_proposal)->with('error', 'Anggota gagal ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProposalRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);
        $params['id_user'] = Auth::user()->id;

        $proposal = Proposal::findOrFail($id);

        if ($proposal) {
            $proposal->update($params);
            $proposal->touch();

            return redirect()->route('pengajuan.edit', $proposal->id)->with('success', 'Proposal berhasil diperbarui');
        }

        return redirect()->route('pengajuan.edit', $proposal->id)->with('error', 'Proposal gagal diperbarui');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeMember($id)
    {
        $anggota = Anggota::findOrFail($id);

        if ($anggota->delete()) {
            return redirect()->route('pengajuan.edit', $anggota->id_proposal)->with('success', 'Anggota berhasil dihapus');
        }

        return redirect()->route('pengajuan.edit', $anggota->id_proposal)->with('error', 'Anggota gagal dihapus');
    }

    public function uploadFile(Request $request, $id)
    {
        $request->validate(
            [
                'file' => 'mimes:pdf|max:2048'
            ],
            [
                'file.mimes' => 'File harus berupa pdf.',
                'file.max' => 'Ukuran file maksimal 2MB.',
            ]
        );

        $proposal = Proposal::findOrFail($id);

        $id_user = Auth::user()->id;

        if ($request->file()) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();

            $folder = '/uploads/pdf';
            $filePath = $file->storeAs($folder, $fileName, 'public');

            $params = [
                'id_user' => $id_user,
                'path' => $filePath,
            ];
        }

        if ($proposal->update($params)) {
            return redirect()->route('pengajuan.edit', $proposal)->with('success', 'Proposal berhasil diunggah');
        }

        return redirect()->route('pengajuan.edit', $proposal)->with('error', 'Proposal gagal diunggah');
    }
}
