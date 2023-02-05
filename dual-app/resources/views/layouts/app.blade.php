<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    {{--
    <style>
      :root {
            --light-bg: #fff;
            --light-text: #000;
            --dark-bg: #333;
            --dark-text: #fff;
        }

        /* Estilos iniciales (modo claro) */
        body {
            background-color: var(--light-bg);
            color: var(--light-text);
        }

        /* Estilos para modo oscuro */
        .dark-mode {
            background-color: var(--dark-bg);
            color: var(--dark-text);
        }     
        </style>
    --}} 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <img src="{{ asset('images/deustoDual.png') }}" class="float-start" alt=""  />
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'FormacionDual') }}
                            </a>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                         <!--Modo Oscuro Modo Claro -->
                        <li class="nav-item">
                        <button class="btn btn-primary btn-switch" id="switch-mode">Dark Mode</button>

                        </li>
                        
                 </ul>
               
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
{{--
<script>
const switchModeBtn = document.querySelector('#switch-mode');
const body = document.querySelector('body');

switchModeBtn.addEventListener('click', function() {
  if (body.classList.contains('dark-mode')) {
    body.classList.remove('dark-mode');
    switchModeBtn.innerHTML = 'Dark Mode';
  } else {
    body.classList.add('dark-mode');
    switchModeBtn.innerHTML = 'Light Mode';
  }
});
</script>   
--}} 
</html>
