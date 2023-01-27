<div id="sidebar">
    <div class="d-flex flex-sm-column flex-row align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <button type="button" class="btn btn-primary btn-lg float-end align-items-sm-start" aria-label="Left Align">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
        </button>
        <button class="btn btn-primary float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
            <i class="bi bi-arrow-right-square-fill fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
        </button>
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">{{ config('app.name', 'FormacionDual') }}</span>
        </a>
        <hr>
        <hr class="sidebar-divider my-0 bg-light">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0" id="menu">
            @if (Route::has('principal'))
                <li class="nav-item">
                    <a href="{{ route('principal') }}" class="nav-link active" aria-current="page">
                        <i class="fs-4 bi-house"></i>
                        <span class="ms-1 d-none d-sm-inline">Home</span>
                    </a>
                </li>
            @endif
            @if (Route::has('darAlta'))
                <li>
                    <a href="{{ route('darAlta') }}" class="nav-link text-white">
                        <i class="fs-4 bi-speedometer2"></i>
                        <span class="ms-1 d-none d-sm-inline">Dar de alta</span>
                    </a>
                </li>
            @endif
            @if (Route::has('asignarDual'))
                <li>
                    <a href="{{ route('asignarDual') }}" class="nav-link text-white">
                        <i class="fs-4 bi-table"></i>
                        <span class="ms-1 d-none d-sm-inline">Asignar Dual</span>
                    </a>
                </li>
            @endif
            @if (Route::has('registros'))
                <li>
                    <a href="{{ route('registros') }}" class="nav-link text-white">
                        <i class="fs-4 bi-grid"></i>
                        <span class="ms-1 d-none d-sm-inline">Registros anteriores</span>
                    </a>
                </li>
            @endif
            @if (Route::has('notificaciones'))
                <li>
                    <a href="{{ route('notificaciones') }}" class="nav-link text-white">
                        <i class="fs-4 bi-bell-fill"></i>
                        <span class="ms-1 d-none d-sm-inline">Notificaciones</span>
                    </a>
                </li>
            @endif
            @if (Route::has('estadisticas'))
                <li>
                    <a href="{{ route('estadisticas') }}" class="nav-link text-white">
                        <i class="fs-4 bi-graph-up"></i>
                        <span class="ms-1 d-none d-sm-inline">Estadisticas</span>
                    </a>
                </li>
            @endif
        </ul>
        <hr>
        <div class="text-center">
            <span class="fs-5 d-none d-sm-inline">Coordinador</span>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    <p> Imposible </p>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
 </div>