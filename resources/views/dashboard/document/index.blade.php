@extends('dashboard.layouts.main')

@section('container')
<div class="bungkus">

  <div class="main mt-3">
    <div class="topbar hidden md:flex">
      <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
      </div>

    </div>

    <div class="bg-white lg: lg:mt-3 mt-15 inset-0 z-10 p-4 lg:pb-0 lg:pt-0">

      <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
        <div class="mb-1 w-full">
          <div class="mb-1">
            <h1 class="text-xl sm:text-2xl font-semibold text-gray-900 uppercase">Upload New Document</h1>
          </div>
        </div>
      </div>

      <form action="{{url('dashboard/document/')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="mb-6 mt-8">
          <label for="success" class="block mb-2 text-sm font-medium text-slate-900">Nama Document</label>
          <input type="text" name="nama"
            class="bg-slate-50 text-slate-900 outline-temaku border border-gray-500 focus:border-temaku  focus:ring-temaku text-sm rounded-lg 0 block w-full p-2.5"
            placeholder="Nama Document" required>
        </div>

        <div class="mb-6 mt-8">
          <label for="success" class="block mb-2 text-sm font-medium text-slate-900">Deskripsi Document</label>
          <input type="text" name="description"
            class="bg-slate-50 text-slate-900 outline-temaku border border-gray-500 focus:border-temaku  focus:ring-temaku text-sm rounded-lg 0 block w-full p-2.5"
            placeholder="Deskripsi Document" required>
        </div>


        <label class="block mb-2 text-sm font-medium text-gray-900" for="default_size">Pilih Document</label>
        <input
          class="block mb-5 py-2 w-full text-sm text-gray-900 bg-gray-50 focus:border-temaku  focus:ring-temaku rounded-lg border border-gray-300 cursor-pointer focus:outline-none"
          id="default_size" type="file" name="file" required>

{{-- 
          <div class="flex justify-center items-center w-full">
            <label for="dropzone-file"
              class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
              <div class="flex flex-col justify-center items-center pt-5 pb-6">
                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or
                  drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
              </div>
              <input id="dropzone-file" type="file" name="file" class="hidden">
            </label>
          </div> --}}

        <a href="/dashboard/document/show">
          <button type="submit"
            class="text-white block w-full bg-temaku hover:bg-temakuhover  focus:ring-4 focus:ring-temaku mt-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">Unggah
            Document
          </button>
        </a>

      </form>
      
    </div>

  </div>

</div>
@endsection