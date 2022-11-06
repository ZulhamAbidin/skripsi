@extends('dashboard.layouts.main')

@section('container')
    <div class="bungkus">

        <div class="main">

            <div class="topbar hidden md:flex">
                <div class="toggle md:mt-2 hidden lg:flex">
                    <ion-icon name="menu-outline" class="hidden lg:flex"> </ion-icon>
                </div>
            </div>

            <div class="bg-white lg:absolute -mt-16 lg:mt-4 p-4 lg:w-full">
                <div class="w-full justify-center items-center">
                    <div class=" w-full px-4 md:p-0 h-full md:h-auto">
                        <div class="bg-white rounded-lg shadow">
                            <div class="flex justify-between p-5 border-b rounded-t">
                                <h3 class="text-xl  font-semibold">
                                    Ganti Password
                                </h3>
{{-- 
                                <div class="">
                                    <a href="/registerauth"
                                        class="text-slate-50 text-center rounded-xl py-2 px-6 font-semibold bg-temaku hover:bg-temakuhover text-sm">Tambah
                                        User</a>
                                </div> --}}
                            </div>
                            @if (Session::has('success'))
                                <div
                                    class="flex justify-between text-slate-50 shadow-inner rounded p-3 bg-temaku mx-24 my-6">
                                    <p class="self-center">
                                        <strong>{{ Session::get('success') }}</strong>
                                    </p>
                                    <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
                                </div>
                            @endif
                            <div class="p-6 space-y-6">
                                {{-- <form method="POST" action="{{ url('/dashboard/password/update') }}"> --}}
                                <form method="POST" class="text-pink-500" action="{{ url('/dashboard/password/edit') }}">
                                    @method('put')
                                    @csrf
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <label for="current_password"
                                                class="text-sm font-medium text-gray-900 block mb-2">
                                                Password Lama</label>
                                            <input type="password" name="current_password" id="current_password"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5"
                                                value="">

                                            @foreach ($errors->get('current_password') as $message)
                                                <p class="text-pink-500">{{ $message }}</p>
                                            @endforeach

                                        </div>

                                        <div class="col-span-6">
                                            <label for="password"
                                                class="text-sm font-medium text-gray-900 block mb-2">Password
                                                Baru</label>
                                            <input type="password" name="password" id="password"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5"
                                                value="">

                                            @foreach ($errors->get('password') as $message)
                                                <p class="text-pink-500">{{ $message }}</p>
                                            @endforeach

                                        </div>

                                        <div class="col-span-6">
                                            <label for="password_confirmation"
                                                class="text-sm font-medium text-gray-900 block mb-2">Konfirmasi
                                                Password Baru</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5"
                                                value="">

                                            @foreach ($errors->get('password_confirmation') as $message)
                                                <p class="text-sky-500">{{ $message }}</p>
                                            @endforeach

                                        </div>

                                    </div>
                            </div>
                            <div class="p-6 border-t border-gray-200 rounded pb-48">
                                <button
                                    class="text-white w-full mb-2 bg-temaku hover:bg-temakuhover focus:ring-4 focus:ring-temaku font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="submit">Submit</button>

                                <button
                                    class="text-white w-full bg-temaku hover:bg-temakuhover focus:ring-4 focus:ring-temaku font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="">Kembali</button>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>


            </div>




        </div>



    </div>
@endsection
