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
            class="bg-slate-50 text-slate-900 outline-cyan-600 border border-gray-500 text-sm rounded-lg 0 block w-full p-2.5"
            placeholder="Nama Document" required>
        </div>

        <div class="mb-6 mt-8">
          <label for="success" class="block mb-2 text-sm font-medium text-slate-900">Deskripsi Document</label>
          <input type="text" name="description"
            class="bg-slate-50 text-slate-900 outline-cyan-600 border border-gray-500 text-sm rounded-lg 0 block w-full p-2.5"
            placeholder="Deskripsi Document" required>
        </div>


        <label class="block mb-2 text-sm font-medium text-gray-900" for="default_size">Pilih Document</label>
        <input
          class="block mb-5 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none"
          id="default_size" type="file" name="file" required>

        <a href="/dashboard/document/show">
          <button type="submit"
            class="text-white block w-full bg-cyan-600 hover:bg-cyan-700  focus:ring-4 focus:ring-cyan-300 mt-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">Upload
            Document
          </button>
        </a>

      </form>
      
    </div>

  </div>

</div>
@endsection