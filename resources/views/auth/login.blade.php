@extends('auth.layouts.main')

@section('container2')
<div class="grid grid-cols-8">

    <div class=" col-span-8 md:col-span-4 mt-8 lg:mt-0">
        <img src="{{ asset('image/login.png') }}" class="w-2/3 mx-auto md:w-full " alt="login">
    </div>

    <div class="col-span-8 md:col-span-4 md:mt-6 mb-16 md:mb-4 ">
        <div class="col-span-4 mx-auto flex flex-col justify-center items-center px-6 pt-8 md:pt-0 pt:mt-0">
            <div class="bg-white shadow-2xl rounded-3xl md:mt-10 w-full sm:max-w-screen-sm xl:p-0">
                <div class="p-6 sm:p-8 lg:p-16 space-y-8 ">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
                        Sign in
                    </h2>
                    <form class="mt-8 space-y-6" action="/login" method="post">
                        @csrf

                        @if (session()->has('success'))
                        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                            role="alert">
                            {!! session('success') !!}
                            <span class="font-medium">Silahkan Login</span> Berdasarkan Email dan password.
                        </div>
                        @endif
                        @if (session()->has('loginError'))
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            {!! session('loginError') !!}
                            <span class="font-medium"> Email atau Password </span> Tidak sesuai silahkan coba
                            kembali.
                        </div>
                        @endif

                        <div>
                            <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-slate-300 text-gray-900 sm:text-sm rounded-lg outline-none active:border-sky-500 focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 placeholder:text-xs"
                                placeholder="Email Address" required value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid text-pink-500 text-xs mt-1">
                                Masukkan email yang lengkap dan sesuai
                            </div>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Your
                                password</label>
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="bg-gray-50 border placeholder:text-xs outline-none border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                required>
                        </div>

                        <div class="flex justify-between">

                            <button type="submit"
                                class="text-white block bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm md:px-5 py-2 w-16  sm:w-auto sm:w-auto text-center">Login
                            </button>

                            @if (Route::has('password.request'))
                            <a class="text-xs pt-3 hover:text-gray-400" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif

                        </div>

                        <div class="text-xs text-gray-400 text-center flex">© 2022 zlhm & <span
                                class="md:hidden pl-1">UNM</span> <span class="hidden md:flex pl-1"> Universitas Negeri
                                Makassar</span> </div>

                    </form>
                </div>
            </div>

        </div>
    </div>


</div>
@endsection













{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
