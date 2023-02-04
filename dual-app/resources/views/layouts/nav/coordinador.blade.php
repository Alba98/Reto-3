
 <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 
                mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
        @if (Route::has('principal'))
            <li class="nav-item">
                <a href="{{ route('principal') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('principal') ? 'active' : '' }}" aria-current="page">
                    <i class="fs-4 bi-house-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Principal</span>
                </a>
            </li>
        @endif
        @if (Route::has('darAlta'))    
            <li class="nav-item">
                <a href="{{ route('darAlta') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('darAlta') ? 'active' : '' }}">
                    <i class="fs-4 bi-file-earmark-plus-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Dar de alta</span>
                </a>
            </li>
        @endif
        @if (Route::has('asignarDual'))
            <li class="nav-item">
                <a href="{{ route('asignarDual') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('asignarDual') ? 'active' : '' }}">
                    <i class="fs-4 bi-file-earmark-person-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Asignar Dual</span>
                </a>
            </li>
        @endif
        @if (Route::has('registros'))
            <li class="nav-item">
                <a href="{{ route('registros') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('registros') ? 'active' : '' }}">
                    <i class="fs-4 bi-archive-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Registros anteriores</span>
                </a>
            </li>
        @endif
        @if (Route::has('notificaciones'))
            <li class="nav-item">
                <a href="{{ route('notificaciones') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('notificaciones') ? 'active' : '' }}">
                    <i class="fs-4 bi-bell-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Notificaciones</span>
                </a>
            </li>
        @endif
        @if (Route::has('estadisticas'))
            <li class="nav-item">
                <a href="{{ route('estadisticas') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('estadisticas') ? 'active' : '' }}">
                    <i class="fs-4 bi-bar-chart-line-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Estadisticas</span>
                </a>
            </li>
        @endif
    </ul>