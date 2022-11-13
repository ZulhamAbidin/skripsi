@extends('dashboard.layouts.main')

@section('container')
    <div class="bungkus">

        <div class="main">

            <div class="header flex justify-between">
                <div class="toggle md:mt-2 hidden lg:flex ">
                    <ion-icon name="menu-outline" class="hidden lg:flex"></ion-icon>
                </div>
            
                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="text-white text-center flex h-10 mt-4 mr-2 inline bg-temaku hover:bg-temakuhover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5"
                    type="button">
            
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
            
                    Admin
            
                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
            
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 539px);">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-center hover:bg-gray-100 hover:text-slate-900 hover:no-underline">{{
                                auth()->user()->name }}</a>
                            <hr class="mt-1">
                        </li>
                        <li>
                            <a href="/dashboard"
                                class="block py-2 px-4 hover:bg-gray-100 hover:text-slate-900 hover:no-underline">Dashboard</a>
                        </li>
                        <li>
                            <a href="/dashboard/password/edit"
                                class="block py-2 px-4 hover:bg-gray-100 hover:text-slate-900 hover:no-underline ">Settings</a>
                        </li>
                        <li>
                            <form action="/logout" method="post" class="hover:bg-gray-100 hover:text-slate-900 hover:no-underline">
                                @csrf
                                <button class="block py-2 px-4 hover:bg-gray-100" type="submit">Sign Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-white pt-4 lg:w-full">
                <div class="w-full justify-center items-center">
                    <div class=" w-full px-4 md:p-0 h-full md:h-auto">
                        <div class="bg-white">
                            <div class="flex justify-between pb-5t">
                                <h3 class="text-xl  font-semibold pb-5">
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
                            <div class=" space-y-6">
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
                            <div class="p-4 border-t border-gray-200 rounded pb-48">
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
