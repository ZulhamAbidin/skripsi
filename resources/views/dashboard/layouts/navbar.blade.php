<nav class="bg-cyan-600 text-slate-50 md:hidden border-gray-200 lg:fixed z-30 w-full">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button class="mobile-menu-hamburger lg:hidden cursor-pointer" id="toggleSidebarMobile"
                    aria-expanded="true" aria-controls="sidebar"
                    class="lg:hidden mr-2 text-gray-600  cursor-pointer p-2 rounded">
                    <svg id="toggleSidebarMobileHamburger" class="w-6 h-6 text-slate-50" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <a href="" class="text-lg font-semibold flex items-center lg:ml-2.5">
                    <img src="https://2.bp.blogspot.com/-O1lY0v44nIA/WjNH9mr8p5I/AAAAAAAAF-8/dugkUbl52QwGU_WZpR2V10yyoFnrbjqKgCLcBGAs/s1600/Kota%2Bmakassar.png"
                        class="h-11" alt="logo">
                    <span class="self-center whitespace-nowrap">E-Document</span>
                </a>
            </div>
            <div class="flex items-center">
                <form action="/logout" method="post"
                    class="hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-slate-50 group focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center">
                    @csrf
                    <button class="ml-3 flex-1 text-slate-50 whitespace-nowrap block group-hover:text-cyan-600"
                        type="submit">Log Out</button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-1 group-hover:text-cyan-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                </form>
            </div>
        </div>

        <div class="hidden hamburger-menu justify-between items-center w-full relative">
            <ul class="flex flex-col mt-10 lg:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/Dashboard"
                        class="block py-2 pr-4 pl-3 text-slate-50 hover:text-slate-900 my-1 rounded-xl text-md border-gray-100 hover:bg-gray-50 {{ Request::is('Dashboard') ? 'bg-gray-50 text-slate-900': ''  }}">
                        Dashboard</a>
                </li>

                <li>
                    <a href="/Dashboard/data"
                        class="block py-2 pr-4 pl-3 text-slate-50 hover:text-slate-900 my-1 rounded-xl text-md border-gray-100 hover:bg-gray-50 {{ Request::is('Dashboard/data') ? 'bg-gray-50 text-slate-900': ''  }}">Data
                        Pekerja</a>
                </li>

                <li>
                    <a href="/Dashboard/data/create"
                        class="block py-2 pr-4 pl-3 text-slate-50 hover:text-slate-900 my-1 rounded-xl text-md border-gray-100 hover:bg-gray-50 {{ Request::is('Dashboard/data/create') ? 'bg-gray-50 text-slate-900': ''  }}">Tambah
                        Data Pekerja</a>
                </li>

                <li>
                    <a href="/Dashboard/cetak/cetak-data-pekerja-form"
                        class="block py-2 pr-4 pl-3 text-slate-50 hover:text-slate-900 my-1 rounded-xl text-md border-gray-100 hover:bg-gray-50 {{ Request::is('Dashboard/cetak/cetak-data-pekerja-form') ? 'bg-gray-50 text-slate-900': ''  }}">Print</a>
                </li>

                <li>
                    <a href="/Dashboard/document/show"
                        class="block py-2 pr-4 pl-3 text-slate-50 hover:text-slate-900 my-1 rounded-xl text-md border-gray-100 hover:bg-gray-50 {{ Request::is('Dashboard/document/index') ? 'bg-gray-50 text-slate-900': ''  }} {{ Request::is('Dashboard/document/show') ? 'bg-gray-50 text-slate-900': ''  }}">Cloud
                        Document</a>
                </li>

                <li>
                    <a href="/Dashboard/password/edit"
                        class="block py-2 pr-4 pl-3 text-slate-50 hover:text-slate-900 my-1 rounded-xl text-md border-gray-100 hover:bg-gray-50 {{ Request::is('Dashboard/password/edit') ? 'bg-gray-50 text-slate-900': ''  }}">Settings
                    </a>
                </li>

                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <a href=""
                            class="block py-2 pr-4 pl-3 text-slate-50 hover:text-slate-900 my-1 rounded-xl text-md border-gray-100 hover:bg-gray-50">
                            <button type="submit">LogOut</button>
                        </a>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>