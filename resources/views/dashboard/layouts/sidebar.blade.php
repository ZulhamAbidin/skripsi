<div class="navigation hidden md:flex">
    <ul>
        <li>
            <a href="#" class="flex">
                <span class="icon mt-5">
                    <img src="https://2.bp.blogspot.com/-O1lY0v44nIA/WjNH9mr8p5I/AAAAAAAAF-8/dugkUbl52QwGU_WZpR2V10yyoFnrbjqKgCLcBGAs/s1600/Kota%2Bmakassar.png"
                        class="h-11" alt="logo">
                </span>
                <span class="title mt-3 ">E-Document</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard') ? 'hovered' : ''  }}">
            <a href="/dashboard" class="">
                <span class="icon">
                    <ion-icon name="file-tray-outline"></ion-icon>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard/data') ? 'hovered' : ''  }} {{ Request::is('dashboard/data/{$id}.edit') ? 'hovered' : ''  }}">
            <a href="/dashboard/data">
                <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Data</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard/data/create') ? 'hovered' : ''  }}">
            <a href="/dashboard/data/create">
                <span class="icon">
                    <ion-icon name="person-add-outline"></ion-icon>
                </span>
                <span class="title">Tambah Data Pekerja</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard/cetak/cetak-data-pekerja-form') ? 'hovered' : ''  }}">
            <a href="/dashboard/cetak/cetak-data-pekerja-form">
                <span class="icon">
                    <ion-icon name="print-outline"></ion-icon>
                </span>
                <span class="title">Print Data Pekerja</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard/document/show') ? 'hovered' : ''  }}{{ Request::is('dashboard/document/index') ? 'hovered' : ''  }}">
            <a href="/dashboard/document/show">
                <span class="icon">
                    <ion-icon name="cloud-done-outline"></ion-icon>
                </span>
                <span class="title">Cloud Document</span>
            </a>
        </li>

        <li class="my-2 {{ Request::is('dashboard/password/edit') ? 'hovered' : ''  }}">
            <a href="/dashboard/password/edit">
                <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title">Settings</span>
            </a>
        </li>

        <li class="my-2">
            <form action="/logout" method="post">
                @csrf
                <a href="" class="">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <button class="title" type="submit">Sign Out</button>
                </a>
            </form>
        </li>
    </ul>
</div>