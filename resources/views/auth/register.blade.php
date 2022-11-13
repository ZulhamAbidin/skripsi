
@extends('auth.layouts.main')

@section('container')

        <form class="mx-10 my-10 md:w-2/3 md:mx-auto lg:w-1/2" method="POST" action="{{ route('register') }}">
            @csrf
        <div class="name text-center font-medium text-xl mb-4 ">REGISTER</div>
        <div class="grid gap-1 mb-6 lg:mb-1 md:grid-cols-2">

            <div class="mb-6 col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Name') }}</label>
                <input type="text" id="name"
                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            <div class="mb-6 col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">{{ __('Email Address') }}</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-6 col-span-2 lg:col-span-1">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 ">{{ __('Password') }}</label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
             </div>

            <div class="mb-6 col-span-2 lg:col-span-1">
                <label for="password-confirm"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('Confirm Password') }}</label>
                <input type="password" id="password-confirm"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5" name="password_confirmation" required autocomplete="new-password">
            </div>

        </div>

        <button type="submit"
            class="text-white bg-temaku hover:bg-temakuhover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">{{ __('Register') }}</button>
    </form>

@endsection
