<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <img src="{{ url('frontend/assets/img/navbar_22.png') }}" alt="" width="250">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{-- {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }} --}}
            {{ __('Terima kasih telah mendaftar! Silahkan cek email Anda untuk memverifikasi alamat email Anda.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Tautan verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button style="background-color: #4a7280">
                        {{ __('Kirim ulang email verifikasi') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900" style="text-decoration: none">
                    {{ __('Keluar') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
