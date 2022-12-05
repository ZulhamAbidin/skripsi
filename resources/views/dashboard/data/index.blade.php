@extends('dashboard.layouts.main')

@section('container')
<div class="bungkus w-11/12">
    <div class="main mt-3 ">

        <div class="header p-2 grid grid-cols-12 items-center ">

            <div class="toggle row-start-1 col-span-1 md:mt-2 hidden lg:flex ">
                <ion-icon name="menu-outline" class="hidden lg:flex"></ion-icon>
            </div>

            <form  {{-- action action=" {{ url('dashboard.data') }}" method="GET" --}} class="col-span-11 row-start-1 lg:col-span-9 col-start-1 flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                   
                    <input type="text" name="keyword" {{-- id="myInputTextField" --}}
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full pl-10 p-2.5"
                        placeholder="Search" required="">

                    <a href="{{ url('dashboard/data') }}" class="absolute top-2 right-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
                <button type="submit"
                    class="p-2.5 ml-2 text-sm font-medium text-white bg-temaku rounded-lg border border-temaku hover:bg-temakuhover focus:ring-4 focus:outline-none focus:ring-temakuhover">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                class="text-white hidden lg:flex  bg-temaku hover:bg-temakuhover w-fit mx-auto col-span-2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center"
                type="button">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

                Admin 

                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>

            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow"
                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 539px);">
                <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                    <li>
                        <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 hover:text-slate-900 hover:no-underline">{{
                            auth()->user()->name }}</a>
                        <hr class="mt-1">
                    </li>
                    <li>
                        <a href="/dashboard" class="block py-2 px-4 hover:bg-gray-100 hover:text-slate-900 hover:no-underline">Dashboard</a>
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

        <div class="header-button flex justify-end lg:justify-end mx-3 gap-1">

            <a href="/dashboard/data/create" type="button"
                class=" text-white bg-temaku hover:bg-temakuhover focus:ring-4 focus:ring-temaku font-medium inline-flex items-center rounded-lg text-sm px-3 py-2 text-center">
                <svg class="-ml-1 mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Tambah Data
            </a>

            <a href="/dashboard/cetak/cetak-data-pekerja-form" type="button"
                class=" text-white bg-temaku hover:bg-temakuhover focus:ring-4 focus:ring-temaku font-medium inline-flex items-center rounded-lg text-sm px-3 py-2 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                </svg>

                Print Data
            </a>

         {{--    <a href="/export-csv" type="button"
                class=" text-white bg-temaku hover:bg-temakuhover focus:ring-4 focus:ring-temaku font-medium inline-flex items-center rounded-lg text-sm px-3 py-2 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                </svg>

                Export Data Ke Excel
            </a> --}}

        </div>

        <div class="bg-white lg:mt-3 inset-0 z-10 pl-4 lg:pb-0 lg:pt-0">

            <div class="pl-4 pb-4 bg-white block sm:flex items-center justify-between border-gray-200 lg:mt-1.5">
                <div class="mb-1 w-full">
                    <div class="mb-1">
                        <h1 class="text-xl font-semibold text-gray-900 flex lg:text-3xl">Data Pencari Kerja</h1>
                        
                        @if (Session::has('success'))
                        <div class="flex justify-between text-slate-50 shadow-inner rounded p-3 bg-temaku mx-24 my-6">
                            <p class="self-center">
                                <strong>{{ Session::get('success') }}</strong>
                            </p>
                            <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto relative mx-4">
                <table id="table"  class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="py-3 px-6 rounded-l-lg">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-6 ">
                                Nama Lengkap
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Jenis Kelamin
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Alamat Domisili
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Tanggal Pengesahan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Pendidikan Terakhir
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Jurusan
                            </th>
                            <th scope="col" class="py-3 rounded-r-lg text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody >
                        
                        @foreach ($data as $key => $value)
                        <tr class="bg-white hover:bg-gray-300 hover:text-black">
                            <th class="py-4 text-center px-2 font-medium text-gray-900 rounded-l-xl">
                                {{ $value->id }}
                            </th>
                            <td scope="py-4 px-6" class="py-4 w-fit px-6">
                                {{ $value->nama_lengkap }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $value->jenis_kelamin }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $value->alamat_domisili }}
                            </td>
                            <td class="py-4 px-6">
                                {{ \Carbon\Carbon::parse($value->hari)->format('d F Y') }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $value->pendidikan_terakhir }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $value->jurusan }}
                            </td>
                            <td class="py-4 px-6 rounded-r-xl">

                                <div class="inline-flex rounded-md shadow-sm">
                                    <form action="{{ url('dashboard/data/' . $value->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button href="#" aria-current="page"
                                            class="py-2 px-4 text-xs font-medium flex text-temakuhover bg-white hover:bg-red-500 rounded-l-lg border border-gray-200">
                                            <svg class="mr-2 h-5 w-5 text-xs" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                
                                    <a href="{{ url('dashboard/data/' . $value->id . '/edit') }}" type="button"
                                        class="py-2 flex px-4 text-xs font-medium text-temakuhover bg-white rounded-r-md border border-gray-200 hover:bg-amber-400 hover:text-temakuhover">
                                        <svg class="mr-2 h-5 w-5 text-xs " fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                        Edit
                                    </a>
                                </div>
                                
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-2 my-10">
                    {{ $data->onEachSide(2)->links() }}
                </div>
            </div>

            {{-- <table id="table_id">
                <thead>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table> --}}


        </div>

    </div>

</div>
@endsection
