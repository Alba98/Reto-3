
<div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center px-3 pt-2 text-white">
                        
    <header id="header_toggle" class="d-flex justify-content-between align-items-center">
        <img src="{{ asset('images/logo.png') }}" class="float-start" alt=""  style="max-width: 20%;"/>
        <h1 class="ms-1 d-none d-sm-inline nav_name">Deusto</h1>
        <button type="button" class="btn text-white align-self-end d-none d-sm-inline" aria-label="Left Align">
            <i class="fs-4 bi-x toggle"></i>
        </button>
    </header>

    <a href="/" class="d-flex align-items-center justify-content-center text-black text-decoration-none">
        <span >{{ config('app.name', 'FormacionDual') }}</span>
    </a>
    <hr class="sidebar-divider my-0 color-light">
        <!--Modo Oscuro Modo Claro -->
        @include('layouts.modoVisual')
                      
                        

    @if (Auth::user()->tipo_usuario)
        @switch(Auth::user()->tipo_usuario)
            @case('coordinador')
                @include('layouts.nav.coordinador')
                @break

            @case('alumno')
                @include('layouts.nav.alumno')
                @break
            
            @case('tuniversidad')
                @include('layouts.nav.tutor')
                @break

            @case('tempresa')
                @include('layouts.nav.tutor')
                @break
            @default
                <span>Something went wrong, please try again</span>
        @endswitch
    @endif


    <hr>
    <div class="text-center nav-item">
        @auth
            
            @if (Auth::user()->tipo_usuario)
                @switch(Auth::user()->tipo_usuario)
                    @case('coordinador')
                        <span class="fs-5 d-none d-sm-inline nav_name"> COORDINADOR </span>
                        @break

                    @case('alumno')
                        <span class="fs-5 d-none d-sm-inline nav_name"> ALUMNO </span>
                        @break
                    
                    @case('tuniversidad')
                        <span class="fs-5 d-none d-sm-inline nav_name"> TUTOR </span>
                        @break

                    @case('tempresa')
                        <span class="fs-5 d-none d-sm-inline nav_name"> TUTOR</span>
                        @break
                    @default
                        <span>Imposible</span>
                @endswitch
            @endif
        @endauth
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                <p> Imposible </p>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        {{ Auth::user()->persona->nombre }}
                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('perfil') }}">
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