@extends('dashboard.layouts.main')

@section('container')
    <div class="bungkus">

        <!-- ========================= Main ==================== -->
        <div class="main container w-4/5 pr-16">

           <div class="toggle md:mt-2 hidden lg:flex">
                <ion-icon name="menu-outline" class="hidden lg:flex"> </ion-icon>
            </div>
            

            <div class="bg-white lg:mt-4 inset-0">

                <div class="grid grid-cols-4 gap-2 p-4">

                    <div
                        class="col-span-4 md:col-span-4 text-sm lg:text-base border p-4 text-center rounded-xl shadow-xl mb-10 hover:text-slate-50 bg-temaku text-slate-50">
                        Selamat Datang Admin <span class=" font-extrabold">{{ auth()->user()->name }} </span>
                    </div>

                    <div
                        class="col-span-4  md:col-span-2 border p-4 text-center rounded-xl shadow-xl md:mb-10 hover:text-slate-50 bg-temaku text-slate-50">
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
                        <a href="/Dashboard/data"
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
