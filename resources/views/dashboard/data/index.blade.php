@extends('dashboard.layouts.main')

@section('container')
    <div class="bungkus">
        <div class="main mt-3 lg:fixed">
            <div class="topbar">
                
                <div class="toggle hidden md:flex md:mt-6">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="block pt-4 sm:pt-10 w-full mt-10 items-center md:divide-x md:divide-gray-100">

                    <form action class="sm:pr-3 mb-4 sm:mb-0 inline" action=" {{ url('dashboard.data') }}"
                        method="GET">
                        <label for="products-search" class="sr-only">Search</label>

                        <div class="mt-1 relative sm:w-full lg:w-5/6">
                            <input type="text" name="keyword" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg active:outline-cyan-500 focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 placeholder:outline-none "
                                placeholder="Search Data">
                            <a href="{{ url('dashboard/data/') }}" class="absolute top-2 right-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </a>
                        </div>

                    </form>


                    <div class="flex items-center sm:justify-end w-full md:flex lg:my-4 lg:pr-14">
                        <div class="mt-4 sm:mt-1 sm:mb-2 lg:my-10 lg:pl-2 space-x-1 lg:absolute">
                            <a href="/dashboard/data/create" type="button"
                                class="add-modal text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2 text-center sm:ml-auto">
                                <svg class="-ml-1 mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Tambah Data
                            </a>
                            <a href="/dashboard/cetak/cetak-data-pekerja-form" type="button"
                                class="ml-4 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2 text-center sm:ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                </svg>

                                Print Data
                            </a>
                            <a href="/export-csv" type="button"
                                class="ml-4 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2 text-center sm:ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                </svg>

                                Export Data Ke Excel
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="bg-white lg: lg:mt-3 mt-10 inset-0 z-10 p-4 lg:pb-0 lg:pt-0">

                <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
                    <div class="mb-1 w-full">
                        <div class="mb-1">
                            <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">Data Pencari Kerja</h1>
                                @if (Session::has('success'))
                                <div class="flex justify-between text-slate-50 shadow-inner rounded p-3 bg-cyan-600 mx-24 my-6">
                                    <p class="self-center">
                                        <strong>{{ Session::get('success') }}</strong>
                                    </p>
                                    <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>

                <div class=" bg-white py-2">
                    <div class='overflow-x-auto w-full'>
                        <table
                            class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                            <thead class="bg-cyan-600">
                                <tr class="text-white text-left">
                                    <th class="font-semibold text-xs uppercase px-3 py-4"> NO </th>
                                    <th class="font-semibold text-xs uppercase px-6 py-4"> NAMA LENGKAP </th>
                                    <th class="font-semibold text-xs uppercase px-6 py-4 text-center"> JENIS <br> KELAMIN
                                    </th>
                                    <th class="font-semibold text-xs uppercase px-6 py-4 text-center"> ALAMAT <br> DOMISILI
                                    </th>
                                    <th class="font-semibold text-xs uppercase px-6 py-4 text-center"> TANGGAL <br>
                                        PENGESAHAN </th>
                                    <th class="font-semibold text-xs uppercase px-1 py-4 text-center"> PENDIDIKAN <br>
                                        TERAKHIR </th>
                                    <th class="font-semibold text-xs uppercase px-3 py-4 text-center"> JURUSAN </th>
                                    <th class="font-semibold text-xs uppercase px-6 py-4 text-center"> ACTION </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 text-left text-xs">
                                @foreach ($datamhs as $key => $value)
                                    <tr class="group">

                                        <td
                                            class="px-1 py-4 border-2 text-center group-hover:bg-gray-300 group-hover:border-gray-300">
                                            {{ $datamhs->firstItem() + $key }}
                                        </td>

                                        <td class="px-2 py-2 border-2 group-hover:bg-gray-300 group-hover:border-gray-300">
                                            {{ $value->nama_lengkap }}
                                        </td>

                                        <td
                                            class="px-1 text-center py-2 border-2 group-hover:bg-gray-300 group-hover:border-gray-300">
                                            {{ $value->jenis_kelamin }}
                                        </td>

                                        <td
                                            class="px-1 py-4 text-center border-2 group-hover:bg-gray-300 group-hover:border-gray-300">
                                            {{ $value->alamat_domisili }}
                                        </td>

                                        <td
                                            class="px-1 py-4 border-2 text-center group-hover:bg-gray-300 group-hover:border-gray-300">
                                            {{ \Carbon\Carbon::parse($value->hari)->format('d F Y') }}
                                        </td>

                                        <td
                                            class="px-1 py-4 text-center border-2 group-hover:bg-gray-300 group-hover:border-gray-300">
                                            {{ $value->pendidikan_terakhir }}
                                        </td>

                                        <td
                                            class="px-2 py-4 text-center border-2 group-hover:bg-gray-300 group-hover:border-gray-300">
                                            {{ $value->jurusan }}
                                        </td>

                                        <td
                                            class="px-6 border-2 group-hover:bg-gray-300 group-hover:border-gray-300 py-1 flex">

                                            <form action="{{ url('dashboard/data/' . $value->id) }}" method="POST"
                                                class="my-2">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" data-modal-toggle="product-modal"
                                                    class="inline-flex items-center rounded-lg bg-red-600 px-3 py-2 text-center text-xs text-white focus:ring-4 focus:ring-cyan-200">
                                                    <svg class="mr-2 h-5 w-5 text-xs" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Delete item
                                                </button>
                                            </form>

                                            <a href="{{ url('dashboard/data/' . $value->id . '/edit') }}" type="button"
                                                data-modal-toggle="product-modal"
                                                class="inline py-2 h-9 mt-2 ml-2 px-6 items-center rounded-lg bg-cyan-600 text-center text-xs font-medium text-white hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200">
                                                <svg class="mr-2 h-5 w-5 text-xs inline" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Edit item
                                            </a>

                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mx-14 mt-3 ">{{ $datamhs->links() }}</div>
                    </div>
                </div>


            </div>

        </div>

    </div>
@endsection
