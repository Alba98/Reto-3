<div id="sidebar">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">{{ config('app.name', 'FormacionDual') }}</span>
        </a>
        <hr>
        <hr class="sidebar-divider my-0">
        <ul class="nav nav-pills flex-column mb-auto">
            @if (Route::has('principal'))
                <li class="nav-item">
                    <a href="{{ route('principal') }}" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Home
                    </a>
                </li>
            @endif
            @if (Route::has('darAlta'))
                <li>
                    <a href="{{ route('darAlta') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Dar de alta
                    </a>
                </li>
            @endif
            @if (Route::has('asignarDual'))
                <li>
                    <a href="{{ route('asignarDual') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Asignar Dual
                    </a>
                </li>
            @endif
            @if (Route::has('registros'))
                <li>
                    <a href="{{ route('registros') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Registros anteriores
                    </a>
                </li>
            @endif
            @if (Route::has('notificaciones'))
                <li>
                    <a href="{{ route('notificaciones') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Notificaciones
                    </a>
                </li>
            @endif
        </ul>
        <hr>
        <div>
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