<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>
<body>
    <div id="app">

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">{{ config('app.name', 'FormacionDual') }}</span>
      
    </a>
    <hr>
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
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>