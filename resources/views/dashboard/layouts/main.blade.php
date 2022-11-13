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

    {{--  DATA TABLES --}}
    
    {{-- kebutuhan datatable --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src=" https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
    <script src=" https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    
    {{-- style pagination --}}
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    {{-- ENDD DATA TABLES --}}

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

    <script>
        const btn = document.querySelector("button.mobile-menu-hamburger");
            const menu = document.querySelector(".hamburger-menu");
            
            btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            });
    </script>

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
