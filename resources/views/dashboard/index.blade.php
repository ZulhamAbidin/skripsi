@extends('dashboard.layouts.main')

@section('container')
    <div class="bungkus">

        <!-- ========================= Main ==================== -->
        <div class="main container w-4/5 pr-16">

            <div class="header flex justify-between">
                <div class="toggle md:mt-2 hidden lg:flex ">
                    <ion-icon name="menu-outline" class="hidden lg:flex"></ion-icon>
                </div>

                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="text-white text-center hidden lg:flex h-10 mt-4 inline bg-temaku hover:bg-temakuhover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5"
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
                                class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{
                                auth()->user()->name }}</a>
                            <hr class="mt-1">
                        </li>
                        <li>
                            <a href="/dashboard"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="/dashboard/password/edit"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <form action="/logout" method="post" class="hover:bg-gray-100">
                                @csrf
                                <button class="block py-2 px-4 hover:bg-gray-100" type="submit">Sign Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            

            <div class="bg-white lg:mt-4 inset-0">

                <div class="grid grid-cols-6 gap-2 p-4">

                    <div
                        class="col-span-6 md:col-span-6 text-sm lg:text-base border p-4 text-center rounded-xl shadow-xl mb-10 hover:text-slate-50 bg-temaku text-slate-50">
                        Selamat Datang Admin <span class=" font-extrabold">{{ auth()->user()->name }} </span>
                    </div>

                    <div
                        class="col-span-6  md:col-span-2 border p-4 text-center rounded-xl shadow-xl md:mb-10 hover:text-slate-50 bg-temaku text-slate-50">
                        <p>Total Pencari Kerja</p>

                        <div class="flex flex-nowrap justify-center mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-16 inline">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>

                            <div class="inline-block text-7xl font-semibold">
                                {{ $total }}
                            </div>

                        </div>
                        <a href="/dashboard/data"
                            class="block mx-auto py-3 mt-8 rounded-xl text-sm bg-temaku border  text-slate-50 w-1/2">Lihat
                            Data</a>
                    </div>



                </div>

                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

                    body {
                        font-family: 'Poppins', sans-serif;
                    }
                </style>

            </div>

        </div>

    </div>
@endsection
