<div class="navigation hidden md:flex">
    <ul>
        <li>
            <a href="#" class="flex">
                <span class="icon mt-5">
                    <img src={{ asset('image/mks.jpg') }} class="h-14" alt="logo">
                </span>
                <span class="title mt-3 italic text-xl">E-Document</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard') ? 'hovered' : ''  }} {{ Request::is('home') ? 'hovered' : ''  }}">
            <a href="/dashboard" class="">
                <span class="icon">
                    <ion-icon name="file-tray-outline" class=""></ion-icon>
                </span>
                <span class="title italic">Dashboard</span>
            </a>
        </li>



        <li class="my-2 {{ Request::is('dashboard/data') ? 'hovered' : ''  }} {{ Request::is('*dashboard/data/*/edit') ? 'hovered' : '' }} {{ Request::is('dashboard/data/{$id}.edit') ? 'hovered' : ''  }} {{ Request::is('dashboard/data/create') ? 'hovered' : ''  }}">
            <a class="mobile-menu-hamburger1">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="title cursor-pointer">Data Pekerja</span>
                <span class="icon  ml-9">
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </span>
            </a>

            <div class="hidden hamburger-menu1">

                <a href="/dashboard/data">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">
                        List Data
                    </span>
                </a>

                <a href="/dashboard/data/create">
                    <span class="icon">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </span>
                    <span class="title">
                    Tambah Data
                    </span>
                </a>
            </div>
        </li>

        <li
            class="my-2 {{ Request::is('dashboard/document/show') ? 'hovered' : ''  }}{{ Request::is('dashboard/document/index') ? 'hovered' : ''  }}">
            <a class="mobile-menu-hamburger2">
                <span class="icon">
                    <ion-icon name="cloud-done-outline"></ion-icon>
                </span>
                <span class="title italic cursor-pointer">E-Document</span>
                <span class="icon ml-8">
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </span>
            </a>
        
            <div class="hidden hamburger-menu2">
        
                <a href="/dashboard/document/show">
                    <span class="icon">
                        <ion-icon name="documents-outline"></ion-icon>
                    </span>
                    <span class="title">
                        List Document
                    </span>
                </a>
        
                <a href="/dashboard/document/index">
                    <span class="icon">
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                    </span>
                    <span class="title">
                        Unggah Document
                    </span>
                </a>
            </div>
        </li>

        {{-- <li class="my-2 {{ Request::is('dashboard/document/show') ? 'hovered' : ''  }}{{ Request::is('dashboard/document/index') ? 'hovered' : ''  }}">
            <a href="/dashboard/document/show" id="dropdownDefault" data-dropdown-toggle="dropdown">
                <span class="icon">
                    <ion-icon name="cloud-done-outline"></ion-icon>
                </span>
                <span class="title">Cloud Document</span>
            </a>

        </li> --}}

        <li class="my-2 {{ Request::is('dashboard/cetak/cetak-data-pekerja-form') ? 'hovered' : ''  }}">
            <a href="/dashboard/cetak/cetak-data-pekerja-form">
                <span class="icon">
                    <ion-icon name="print-outline"></ion-icon>
                </span>
                <span class="title">Print Data Pekerja</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard/password/edit') ? 'hovered' : ''  }}">
            <a href="/dashboard/password/edit">
                <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title italic">Settings</span>
            </a>
        </li>


        <li class="my-2">
            <form action="/logout" method="post">
                @csrf
                <a href="" class="">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <button class="title italic" type="submit">Sign Out</button>
                </a>
            </form>
        </li>

    </ul>
</div>

<script>

</script>