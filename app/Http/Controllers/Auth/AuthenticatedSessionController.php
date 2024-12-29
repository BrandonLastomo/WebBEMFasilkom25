<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Maba;
use App\Models\User;
use App\Models\Peminjam;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login', $this->data);
    }

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function createMaba()
    {
        return view('pages.pkkmb.login', $this->data);
    }

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */

    public function createPeminjam()
    {
        return view('pages.pinjam-bem.login', $this->data);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $user = User::where('email', request('email'))->first();
        if ($user === null || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'invalid' => ['Email atau kata sandi yang dimasukkan salah.']
            ])->withInput();
        }

        $request->authenticate();

        $request->session()->regenerate();

        if ($user->hasAnyRole('Admin', 'Humas', 'Operator')) {
            return redirect('admin');
        }

        // return redirect()->intended(RouteServiceProvider::HOME);
        return redirect()->route('pkm-center');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeMaba(LoginRequest $request)
    {
        $maba = Maba::where('email', request('email'))->first();
        if ($maba === null || !Hash::check($request->password, $maba->password)) {
            return back()->withErrors([
                'invalid' => ['Email atau kata sandi yang dimasukkan salah.']
            ])->withInput();
        }

        if (Auth::guard('maba')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/PkkmbFasilkom2021');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    
    public function storePeminjam(LoginRequest $request)
    {
        $peminjam = Peminjam::where('email', request('email'))->first();
        if ($peminjam === null || !Hash::check($request->password, $peminjam->password)) {
            return back()->withErrors([
                'invalid' => ['Email atau kata sandi yang dimasukkan salah.']
            ])->withInput();
        }

        if (Auth::guard('peminjam')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            
            $request->session()->regenerate();

            return redirect()->route('pinjam.lihatbarang');
            
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyMaba(Request $request)
    {
        // dd($request);
        Auth::guard('maba')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('pkkmb');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyPeminjam(Request $request)
    {
        // dd($request);
        Auth::guard('peminjam')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('pinjam.login');
    }
}
