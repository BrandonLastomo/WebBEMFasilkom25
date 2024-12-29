@extends('layouts.auth.admin')

@section('title')
  BEM Fasilkom Kabinet {{env('KABINET');}} - Login
@endsection

@section('content')
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
  <section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
      <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
        <div class="p-4 m-3">
          <img src="{{ asset('frontend/assets/img/Circle_22.png') }}" alt="logo" width="100" class="shadow-light rounded-circle mb-4 mt-2">
          <!-- <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Stisla</span></h4> -->
          <h4 class="text-dark font-weight-normal">Selamat Datang</h4>
          <!-- <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p> -->
          <p class="text-muted">Semoga harimu menyenangkan!</p>
          <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
              </div>
              <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
              <div class="invalid-feedback">
                Please fill in your password
              </div>
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                <label class="custom-control-label" for="remember-me">Remember Me</label>
              </div>
            </div>

            <div class="form-group text-right">
              <!-- <a href="auth-forgot-password.html" class="float-left mt-3">
                Forgot Password?
              </a> -->
              <a href="auth-forgot-password.html" class="float-left mt-3">
                Lupa Kata Sandi?
              </a>
              <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                Login
              </button>
            </div>

            <div class="mt-5 text-center">
              <!-- Don't have an account? <a href="auth-register.html">Create new one</a> -->
              Belum punya akun? <a href="auth-register.html">Buat yang baru</a>
            </div>
          </form>

          <div class="text-center mt-5 text-small">
            <!-- Copyright &copy; Your Company. Made with 💙 by Stisla -->
            Copyright © 2022  Departemen Pengembangan Teknologi Informasi BEM Fasilkom UNSIKA {{env('KABINET_TAHUN');}}2
            <!-- <div class="mt-2">
              <a href="#">Privacy Policy</a>
              <div class="bullet"></div>
              <a href="#">Terms of Service</a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{ asset('admin-stisla/assets/img/unsplash/login-bg.jpg') }}">
        <div class="absolute-bottom-left index-2">
          <div class="text-light p-5 pb-2">
            <div class="mb-5 pb-3">
              <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
              <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
            </div>
            Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
