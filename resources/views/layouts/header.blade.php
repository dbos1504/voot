{{--@if (Route::has('login'))--}}
{{--    <div class="top-right links">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/home') }}">Home</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}">Login</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}">Register</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}
<a class="navbar-brand" href="/">
    <img src="/img/logo.svg" alt="logo">
</a>
<nav class="container navbar navbar-expand-lg w-3/4 h-full">
    <button id="tet" class="test" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</button>
    <a id="dugm" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav prvi-link flex mr-auto">
            <li class="nav-item">
                <a class="text-gray-600 block px-6 hover:no-underline hover:text-black" href="/um-okkur">
                    @lang('header.Um Okkur')
{{--                    Um Okkur--}}
                </a>
            </li>
            <li class="nav-item">
                <a class="text-gray-600 block px-6 hover:no-underline hover:text-black" href="/pjonusta">
                    @lang('header.þjónusta')
{{--                    þjónusta--}}
                </a>
            </li>
            <li class="nav-item dropdown relative nav-okkar-link">
                <a class="text-gray-600 block px-6 hover:no-underline hover:text-black" href="/um-vorurnar-okkar">
                    @lang('header.UM VÖRURNAR OKKAR')
{{--                    UM VÖRURNAR OKKAR--}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/beita">Beita</a>
                    <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/veidarferi">Veiðarfæri</a>
                    <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/hlifdarfatnadur">Öryggis-og vinnufatnaður</a>
                    <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/rekstrarvorur">Rekstrarvörur</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="block px-6 hover:no-underline
                  {{ \Request::route()->getName() == 'vorur' ? 'text-black' : 'text-gray-600' }} hover:text-black"
                   href="/allar-vorur">
                    @lang('header.Allar Vörur')
{{--                    Allar Vörur--}}
                </a>
            </li>
            <li class="nav-item">
                <a class="block px-6 hover:no-underline hover:text-black
                  {{ Request::route()->getName() == 'contact' ? 'text-black' : 'text-gray-600' }}"
                   href="/hafa-samband">
                    @lang('header.HAFA SAMBAND')
{{--                    HAFA SAMBAND--}}
                </a>
            </li>
        </ul>
    </div>
    <form method="POST" class="form-inline header-forma my-2 my-lg-0">
        @csrf
        <input type="search" class="px-2 py-2" aria-label="Search">
        <button class="my-2 p-3 my-sm-0" type="submit">
            <img src="/img/lupa.svg" alt="lupa">
        </button>
    </form>
</nav>
<div id="mySidenav" class="sidenav">
    <ul class="navbar-nav prvi-link flex mr-auto">
        <li class="nav-item">
            <a class="text-gray-600 block px-6 hover:no-underline hover:text-black" href="/um-okkur">UM OKKUR</a>
        </li>
        <li class="nav-item">
            <a class="text-gray-600 block px-6 hover:no-underline hover:text-black" href="/pjonusta">þjónusta</a>
        </li>
        <li class="nav-item dropdown relative nav-okkar-link">
            <a class="text-gray-600 block px-6 hover:no-underline hover:text-black" href="/um-vorurnar-okkar">
                UM VÖRURNAR OKKAR
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/beita">Beita</a>
                <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/veidarferi">Veiðarfæri</a>
                <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/hlifdarfatnadur">Öryggis-og vinnufatnaður</a>
                <a class="dropdown-item text-gray-600" href="/um-vorurnar-okkar/rekstrarvorur">Rekstrarvörur</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="block px-6 hover:no-underline
                  {{ \Request::route()->getName() == 'vorur' ? 'text-black' : 'text-gray-600' }} hover:text-black"
               href="/allar-vorur">
                Allar Vörur
            </a>
        </li>
        <li class="nav-item">
            <a class="block px-6 hover:no-underline hover:text-black
                  {{ Request::route()->getName() == 'contact' ? 'text-black' : 'text-gray-600' }}"
               href="/hafa-samband">
                HAFA SAMBAND
            </a>
        </li>
    </ul>
    <div class="translation-mobile">
        <a class="text-gray-600" href="">ÍS</a>&nbsp; &bull; &nbsp;
        <a class="text-gray-600" href="">EN</a>
    </div>
    <section class="flex soc-mobil lg:absolute">
        <a class="pr-6" ml-6 href="">
            <img src="/img/face-star.svg" alt="facebook">
        </a>
        <a class="pr-6 ml-6" href="">
            <img src="/img/ins-star.svg" alt="instagram">
        </a>
        <a class="pr-6 ml-6" href="">
            <img src="/img/in-star.svg" alt="linkedin">
        </a>
    </section>
</div>
<div class="translation">
    <a class="text-gray-600" href="/locales/is">ÍS</a>&nbsp; &bull; &nbsp;
    <a class="text-gray-600" href="/locales/en">EN</a>
</div>