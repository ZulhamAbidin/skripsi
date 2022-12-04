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

<body>

  
    @vite('resources/js/app.js')

    

    {{-- ENDD DATA TABLES --}}

    <script>
        $(document).ready(function () {
                $('#tableBuku').DataTable();
            });
    
            //menambahkan form input custom
            oTable = $('#tableBuku')
            .DataTable(); //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
            $('#myInputTextField').keyup(function () {
                oTable.search($(this).val()).draw();
            })
    </script>
    
    <style>
        .dataTables_filter,
        .dataTables_info {
            display: none;
        }

        .text-xs {
        text-decoration: none;
        }
    </style>


</body>

</html>
