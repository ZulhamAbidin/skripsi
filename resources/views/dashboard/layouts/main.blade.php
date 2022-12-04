<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('dashboard.layouts.sidebar')
    @include('dashboard.layouts.navbar')
    @yield('container')

    <script src="{{ asset('js/main.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- masih cdn --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    {{-- end --}}

    @vite('resources/css/app.css')
    <title>
        {{-- {{ ($title === "edit") ? '' : '' }} --}}
        {{ Request::is('home') ? 'Dashboard' : '' }}
        {{ Request::is('*dashboard/data/*/edit') ? 'Edit': '' }}
        {{ Request::is('dashboard') ? 'Dashboard' : '' }}
        {{ Request::is('dashboard/data') ? 'Lihat Data' : '' }}
        {{ Request::is('dashboard/data/create') ? 'Tambah Data' : '' }}
        {{ Request::is('dashboard/cetak/cetak-data-pekerja-form') ? 'Cetak' : '' }}
        {{ Request::is('dashboard/document/show') ? 'Lihat Document' : '' }}
        {{ Request::is('dashboard/document/index') ? 'Unggah Document' : '' }}
        {{ Request::is('dashboard/password/edit') ? 'Ganti Password' : '' }}
    </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('image/dashboardicon.png') }}">
</head>

<body onload="zoom()">


    @vite('resources/js/app.js')

<script type="text/javascript">
    function zoom() {
            document.body.style.zoom = "85%" 
        }
</script>


</body>

</html>
