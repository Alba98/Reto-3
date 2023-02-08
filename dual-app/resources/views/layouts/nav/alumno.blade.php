
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
        @if (Route::has('diarioAprendizaje'))
            <li class="nav-item">
                <a href="{{ route('diarioAprendizaje') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('diarioAprendizaje') ? 'active' : '' }}" aria-current="page">
                    <i class="fs-4 bi-file-earmark-medical-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Diario Aprendizaje</span>
                </a>
            </li>
        @endif
        @if (Route::has('notas'))    
            <li class="nav-item">
                <a href="{{ route('notas') }}" class="nav-link px-sm-0 px-2 text-white nav_link {{ Route::is('notas') ? 'active' : '' }}">
                    <i class="fs-4 bi-file-earmark-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Notas</span>
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
                <a href="{{ route('notificaciones') }}" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-bell-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Notificaciones</span>
                </a>
            </li>
        @endif
    </ul>