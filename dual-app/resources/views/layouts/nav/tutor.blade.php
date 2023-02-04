
 <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 
                mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
        <!-- <nav-item name="principal" icon="house" link="{{ route('principal') }}"></nav-item> -->
        @if (Route::has('principal'))
            <li class="nav-item">
                <a href="{{ route('principal') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('principal') ? 'active' : '' }}" aria-current="page">
                    <i class="fs-4 bi-house-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Principal</span>
                </a>
            </li>
        @endif
        @if (Auth::user()->tipo_usuario == 'tuniversidad')
            @if (Route::has('fichaSeguimineto'))   
                <li class="nav-item">
                    <a href="{{ route('fichaSeguimineto') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('fichaSeguimineto') ? 'active' : '' }}">
                        <i class="fs-4 bi-file-earmark-text-fill nav_icon"></i>
                        <span class="ms-1 d-none d-sm-inline nav_name">Ficha seguiminto</span>
                    </a>
                </li>
            @endif
            @if (Route::has('evaluar'))
                <li class="nav-item">
                    <a href="{{ route('evaluar') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('evaluar') ? 'active' : '' }}">
                        <i class="fs-4 bi-file-ruled-fill nav_icon"></i>
                        <span class="ms-1 d-none d-sm-inline nav_name">Evaluar</span>
                    </a>
                </li>
            @endif
        @endif
        @if (Route::has('alumnos'))
            <li class="nav-item">
                <a href="{{ route('alumnos') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('alumnos') ? 'active' : '' }}">
                    <i class="fs-4 bi-person-lines-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Alumnos</span>
                </a>
            </li>
        @endif
        @if (Route::has('registrosAlumno'))
            <li class="nav-item">
                <a href="{{ route('registrosAlumno') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('registrosAlumno') ? 'active' : '' }}">
                    <i class="fs-4 bi-archive-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Registros anteriores</span>
                </a>
            </li>
        @endif
        @if (Route::has('notificaciones'))
            <li class="nav-item">
                <a href="{{ route('notificaciones') }}" class="nav-link px-sm-0 px-2 text-white nav_link  {{ Route::is('notificaciones') ? 'active' : '' }}">
                    <i class="fs-4 bi-bell-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Notificaciones</span>
                </a>
            </li>
        @endif
    </ul>