@extends('auth.layouts.main')

@section('container')
    <div class="box  mt-8 mx-10 md:w-1/2 lg:w-1/3 md:mx-auto">
        <div class="name text-center mb-4 font-semibold ">{{ __('Reset Password') }}</div>

        @if (session('status'))
            <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg "
                role="alert">
                <span class="font-medium">Sukses,</span> Link verifikasi telah dikirim ke alamat email yang telah terdaftar
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label for="email"
                class="block mb-2 text-sm font-medium text-gray-900 ">{{ __('Email Address') }}
            </label>

            <input type="email" id="email" aria-describedby="helper-text-explanation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5
                @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <div class="text-xs text-pink-500"> Alamat email tidak sesuai</div>
                @enderror

            <button type="submit"
                class="text-white my-2  bg-temaku hover:bg-temakuhover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center">
                {{ __('Send Password Reset Link') }}
            </button>

        </form>
    </div>
@endsection
































{{-- 

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
