@extends('auth.layouts.main')

@section('container')
    <form class="mx-10 my-10 md:w-2/3 md:mx-auto lg:w-1/2" method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="name text-center font-medium text-xl mb-4">{{ __('Reset Password') }}</div>
        <div class="grid gap-1 mb-6 lg:mb-1 md:grid-cols-2">

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-6 col-span-2">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('Email Address') }}</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5
                    @error('email') is-invalid @enderror"
                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-6 col-span-2 lg:col-span-2">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('Password Baru') }}</label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5
                    @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="mb-6 col-span-2 lg:col-span-2">
                <label for="password-confirm"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('Konfirmasi Password Baru') }}</label>
                <input type="password" id="password-confirm"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5"
                    name="password_confirmation" required autocomplete="new-password">
            </div>

        </div>

        <button type="submit"
            class="text-white bg-temaku hover:bg-temakuhover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">{{ __('Reset Password') }}</button>
    </form>
@endsection




























{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }} ini </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
