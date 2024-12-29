<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Maba;
use App\Models\User;
use App\Models\Peminjam;
use App\Providers\RouteServiceProvider;
use App\Rules\SpecificDomainOnly;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use Session;

class RegisteredUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['tahun'] = Anggota::tahun();
        $this->data['prodi'] = Anggota::prodi();
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register', $this->data);
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function createMaba()
    {
        $this->data['program_studi'] = Maba::prodi();

        return view('pages.pkkmb.register', $this->data);
    }

    /**
        * Display the registration view.
        *
        * @return \Illuminate\View\View
        */
    public function createPeminjam()
    {
        $this->data['program_studi'] = Peminjam::prodi();

        return view('pages.pinjam-bem.daftar',$this->data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:users',
                    // new SpecificDomainOnly
                ],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'npm' => ['required', 'numeric'],
                'prodi' => ['required', 'string'],
                'tahun_masuk' => ['required', 'string'],
            ],
            [
                'password.required' => 'Kata Sandi harus diisi',
                'password.confirmed' => 'Kata Sandi tidak sesuai',
                'npm.required' => 'NPM harus diisi',
                'npm.numeric' => 'NPM harus berupa angka',
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'npm' => $request->npm,
            'prodi' => $request->prodi,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        $user->assignRole('User');

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('pkm-center');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeMaba(Request $request)
    {
        $request->validate(
            [
                'nama' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:maba',
                    new SpecificDomainOnly
                ],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'prodi' => ['required', 'string'],
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah digunakan',
                'password.required' => 'Kata Sandi harus diisi',
                'password.confirmed' => 'Kata Sandi tidak sesuai',
            ]
        );

        $maba = Maba::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'prodi' => $request->prodi,
        ]);

        event(new Registered($maba));

        return redirect()->back()->with('success', 'Silahkan login untuk masuk ke halaman login.');
    }

      /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storePeminjam(Request $request)
    {
        $request->validate(
            [
                'nama' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:users',
                    new SpecificDomainOnly
                    // new SpecificDomainOnly
                ],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'npm' => ['required', 'numeric'],
                'prodi' => ['required', 'string'],
                'no_hp' => ['required', 'numeric'],
            ],
            [
                'password.required' => 'Kata Sandi harus diisi',
                'password.confirmed' => 'Kata Sandi tidak sesuai',
                'npm.required' => 'NPM harus diisi',
                'npm.numeric' => 'NPM harus berupa angka',
            ]
        );

        $peminjam = Peminjam::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'npm' => $request->npm,
            'prodi' => $request->prodi,
            'no_hp' => $request->no_hp,
        ]);

        event(new Registered($peminjam));

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->back()->with('success', 'Silahkan login untuk masuk ke halaman login.');
    }
}
