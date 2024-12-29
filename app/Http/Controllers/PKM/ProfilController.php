<?php

namespace App\Http\Controllers\PKM;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Proposal;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    use PasswordValidationRules;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentPkmMenu'] = 'profil';
        $this->data['currentPkmSubMenu'] = '';

        $this->data['tahun'] = Anggota::tahun();
        $this->data['prodi'] = Anggota::prodi();
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
        $this->data['user'] = Auth::user();


        return view('pages.aplikasi-publik.pkm.profil.index', $this->data);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrfail($id);

        $this->data['user'] = $user;

        return view('pages.aplikasi-publik.pkm.profil.edit-profil', $this->data);
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
        $request->validate([
            'name' => ['required'],
            'npm' => ['required'],
            'prodi' => ['required'],
            'tahun_masuk' => ['required'],
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'npm' => $request->npm,
            'prodi' => $request->prodi,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        $request->validate([
            'current_password' => [($request->current_password) ? new MatchOldPassword : []],
            'new_password' => [($request->new_password) ? $this->passwordRules() : []],
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->new_password) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);

            return redirect()->route('profil.index')->with('success', 'Kata Sandi berhasil diperbarui');
        }

        return redirect()->route('profil.index')->with('success', 'Kata Sandi berhasil diperbarui');
    }
}
