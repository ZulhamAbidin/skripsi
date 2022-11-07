@extends('dashboard.layouts.main')

@section('container')
<div class="bungkus">

    <div class="main lg:mt-3">

        {{-- <div class="header p-2 grid grid-cols-9 items-center ">
        
            <div class="toggle row-start-1 col-span-1 md:mt-2 hidden lg:flex invisible lg:visible">
                <ion-icon name="menu-outline" class="hidden lg:flex"></ion-icon>
            </div>
        
            <form action action=" {{ url('dashboard/document/show') }}" method="GET"
                class="col-span-9 row-start-1 lg:col-span-8 col-start-1 lg:col-start-2 flex items-center">
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
                    <input type="text" name="search" id=""
                        class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full pl-10 p-2.5"
                        placeholder="Search" required="">

                    <a href="{{ url('dashboard/document/show') }}" class="absolute top-2 right-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
                <button type="submit"
                    class="p-2.5 ml-2 text-sm font-medium text-white bg-temaku rounded-lg border border-temaku hover:bg-temakuhover focus:ring-4 focus:outline-none focus:ring-temaku">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

        </div> --}}

        <div class="header p-2 grid grid-cols-12 items-center ">
        
            <div class="toggle row-start-1 col-span-1 md:mt-2 hidden lg:flex invisible lg:visible">
                <ion-icon name="menu-outline" class="hidden lg:flex"></ion-icon>
            </div>
        
            <form action action="{{ url('dashboard/document/show') }}" method="GET"
                class="col-span-11 row-start-1 lg:col-span-9 col-start-1 flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" name="search" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full pl-10 p-2.5"
                        placeholder="Search" required="">
        
                    <a href="{{ url('dashboard/document/show') }}" class="absolute top-2 right-3">
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
                class="text-white invisible lg:visible bg-temaku hover:bg-temakuhover w-fit mx-auto col-span-2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
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
                            class="block py-2 px-4 hover:bg-gray-100">Dashboard</a>
                    </li>
                    <li>
                        <a href="/dashboard/password/edit"
                            class="block py-2 px-4 hover:bg-gray-100">Settings</a>
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


        <div class="bg-white lg:mt-3 inset-0 z-10 p-4 lg:pb-0 lg:pt-0">

            @if (Session::has('success'))

            <div class="flex justify-between text-slate-50 shadow-inner rounded p-3 bg-temaku mx-24 my-6">
                <p class="self-center">
                    <strong>{{ Session::get('success') }}</strong>
                </p>
                <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
            </div>

            @endif

            <div class="mb-1 grid grid-cols-5 mt-4 lg:flex justify-between">

                <div class="mb-1 mt-1 col-span-2 lg:col-span-2 lg:ml-28 overflow-x-auto">
                    <h1 class="text-xl sm:text-2xl font-semibold text-gray-900 uppercase">Cloud Document</h1>
                </div>

                <div class="mb-1 col-span-2 col-start-5 lg:mr-28 overflow-x-auto">
                    <a href="/dashboard/document/index"
                        class=" text-white bg-temaku py-2 px-4 text-sm hover:bg-temakuhover focus:ring-4 focus:ring-temaku font-medium inline-flex items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg> Upload</a>
                </div>

            </div>

            <div class="overflow-x-auto relative mx-4 mt-8">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="py-3 px-6 rounded-l-lg">
                               No
                            </th>
                            <th scope="col" class="py-3 px-6">
                               Nama Dokumen
                            </th>
                            <th scope="col" class="py-3 px-6">
                               Description Dokumen
                            </th>
                            <th scope="col" class="py-3 rounded-r-lg text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($datamhs as $key => $value) --}}
                        @foreach ($data as $key=>$value)
                        <tr class="bg-white hover:bg-slate-100 hover:text-black">
                            <td class="py-4 px-6">
                                {{ $data->firstItem() + $key }}
                            </td>
                            <td scope="py-4 px-6" class="py-4 px-6">
                               {{ $value->nama }}
                            </td>
                            <td class="py-4 px-6 w-3/5">
                                {{ $value->description }}
                            </td>
                           
                            <td class="py-4 px-6 rounded-r-xl">
            
                                <div class="inline-flex rounded-md shadow-sm">
                                    <a href="/dashboard/document/show/{{ $value->id }}"
                                        class="py-2 px-4 text-xs font-medium flex text-temaku bg-white hover:bg-red-500 hover:text-slate-50 rounded-l-lg border border-gray-200">
                                        <svg class="mr-2 h-5 w-5 text-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                        Delete
                                    </a>
                                
                                    <a href="{{url('/dashboard/document/download',$value->file)}}" type="button" aria-current="page"
                                        class="py-2 px-4 flex text-xs font-medium text-temaku bg-white rounded-r-md border border-gray-200 hover:bg-temaku hover:text-slate-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="mr-2 h-5 w-5 text-xs inline">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                        Download
                                    </a>
                                </div>
            
                            </td>
            
                        </tr>
                        @endforeach
                    </tbody>
            
                </table>
            </div>

        </div>

    </div>

</div>
@endsection