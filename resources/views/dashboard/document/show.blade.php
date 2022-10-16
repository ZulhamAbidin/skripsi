@extends('dashboard.layouts.main')

@section('container')
<div class="bungkus">

    <div class="main lg:mt-3">

        <div class="topbar mb-5 mt-4">
            <div class="toggle hidden md:flex">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="block lg:ml-16 pt-0 sm:pt-5 w-full mt-0 items-center md:divide-x md:divide-gray-100">
                
                    <form action class="sm:pr-3 mb-4 sm:mb-0 inline" action=" {{ url('dashboard/document/show') }}" method="GET">
                        <label for="products-search" class="sr-only">Search</label>
                
                        <div class="mt-1 relative sm:w-full lg:w-5/6">
                            <input type="text" name="search" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg active:outline-cyan-500 focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 placeholder:outline-none "
                                placeholder="Search Data">
                            <a href="{{ url('dashboard/data/') }}" class="absolute top-2 right-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </a>
                        </div>
                
                    </form>
                
                </div>

        </div>

        <div class="bg-white lg:mt-3 inset-0 z-10 p-4 lg:pb-0 lg:pt-0">

            @if (Session::has('success'))

            <div class="flex justify-between text-slate-50 shadow-inner rounded p-3 bg-cyan-600 mx-24 my-6">
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
                        class=" text-white bg-cyan-600 py-2 px-4 text-sm hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg> Upload</a>
                </div>

            </div>


            <div class=" bg-white py-2">
                <div class='overflow-x-auto w-full'>
                    <table
                        class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                        <thead class="bg-cyan-600">
                            <tr class="text-white text-center">
                                <th class="font-semibold text-xs uppercase px-3 py-3"> NO </th>
                                <th class="font-semibold text-xs uppercase px-6 py-3"> NAMA </th>
                                <th class="font-semibold text-xs uppercase px-6 py-3"> Description </th>
                                <th class="font-semibold text-xs uppercase px-6 py-3"> Download</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 text-left text-xs">
                            {{-- @foreach($data as $data) --}}
                            @foreach ($data as $key=>$value)
                            <tr class="group">
                                <td
                                    class="px-1 py-1 border-2 text-center group-hover:bg-gray-300 group-hover:border-gray-300">
                                   {{ $data->firstItem() + $key }}
                                </td>

                                <td class="px-2 py-1 border-2 group-hover:bg-gray-300 group-hover:border-gray-300">
                                   {{ $value->nama }}
                                </td>

                                <td
                                    class="px-1 text-center py-1 border-2 group-hover:bg-gray-300 group-hover:border-gray-300">
                                    {{ $value->description }}
                                </td>

                                <td class="px-1 border-2 pb-3 w-auto group-hover:bg-gray-300 group-hover:border-gray-300 flex">

                                    <a href="{{url('/dashboard/document/download',$value->file)}}" type="button"
                                        data-modal-toggle="product-modal"
                                        class="block mx-auto py-2 h-9 mt-2 px-4 items-center rounded-lg bg-cyan-600 text-center text-xs font-medium text-white hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200">
                                        <svg class="mr-2 h-5 w-5 text-xs inline" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Download
                                    </a>
                                    <a href="/dashboard/document/show/{{ $value->id }}" class="block mx-auto py-2 h-9 mt-2 px-4 items-center rounded-lg bg-red-600 text-center text-xs font-medium text-white
                                    hover:bg-red-700 focus:ring-4 focus:ring-cyan-200">
                                        <svg class="mr-2 h-5 w-5 text-xs inline" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   <div class="mx-28 mt-4">{{ $data->links() }}</div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection