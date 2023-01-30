
 <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 
                mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
        @if (Route::has('principal_a'))
            <li class="nav-item">
                <a href="{{ route('principal_a') }}" class="nav-link px-sm-0 px-2 text-white nav_link active" aria-current="page">
                    <i class="fs-4 bi-house nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Principal</span>
                </a>
            </li>
        @endif
        @if (Route::has('diario_a'))
            <li class="nav-item">
                <a href="{{ route('diario_a') }}" class="nav-link px-sm-0 px-2 text-white nav_link active" aria-current="page">
                    <i class="fs-4 bi-house nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Diario Aprendizaje</span>
                </a>
            </li>
        @endif
        @if (Route::has('notas_a'))    
            <li class="nav-item">
                <a href="{{ route('notas_a') }}" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-speedometer2 nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Notas</span>
                </a>
            </li>
        @endif
        @if (Route::has('registros_a'))
            <li class="nav-item">
                <a href="{{ route('registros_a') }}" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-grid nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Registros anteriores</span>
                </a>
            </li>
        @endif
        @if (Route::has('notificaciones_a'))
            <li class="nav-item">
                <a href="{{ route('notificaciones_a') }}" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-bell-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Notificaciones</span>
                </a>
            </li>
        @endif
    </ul>