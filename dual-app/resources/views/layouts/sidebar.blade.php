<div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                        
    <header id="header">
        <div class="header_toggle">
            <button type="button" class="btn btn-primary btn float-end align-items-sm-start d-none d-sm-inline" aria-label="Left Align">
                <i class="fs-4 bi-x" id="header-toggle"></i>
            </button>
            <button type="button" class="btn btn-primary btn float-end align-items-sm-start d-none d-sm-inline" aria-label="Left Align">
                <i class="fs-4 bi-arrow-right-square-fill" id="header-toggle"></i>
            </button>
        </div>
    </header>

    <a href="/" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span >{{ config('app.name', 'FormacionDual') }}</span>
    </a>
    <hr class="sidebar-divider my-0 color-light">
    
    {{-- @include('layouts.nav.coordinador') --}}
    {{-- @include('layouts.nav.alumno') --}}
    @switch(Auth::user()->rol)
        @case('Coordinador')
            @include('layouts.nav.coordinador')
            @break

        @case('Alumno')
            @include('layouts.nav.alumno')
            @break
        
        @case('Tutor')
            @include('layouts.nav.tutor')
            @break

        @default
            <span>Something went wrong, please try again</span>
            @include('layouts.nav.coordinador')
    @endswitch

    <hr>
    <div class="text-center nav-item">
        @auth
            <span class="fs-4 d-none d-sm-inline nav_name">{{Auth::user()->rol}}</span>
        @endauth
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                <p> Imposible </p>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Ajustes') }}
                        </a>
                        <a class="dropdown-divider"a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>