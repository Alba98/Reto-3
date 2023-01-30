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
        <span class="fs-4">F<span class="d-none d-sm-inline">ormacion</span>D<span class="d-none d-sm-inline">ual</span></span>
    </a>
    <hr class="sidebar-divider my-0 color-light">
    <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 
                mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">

            <li class="nav-item">
                <a href="#" class="nav-link px-sm-0 px-2 text-white nav_link active" aria-current="page">
                    <i class="fs-4 bi-house nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Home</span>
                </a>
            </li>
    
            <li class="nav-item">
                <a href="#" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-speedometer2 nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Dar de alta</span>
                </a>
            </li>
    
            <li class="nav-item">
                <a href="#" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-table nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Asignar Dual</span>
                </a>
            </li>
        
            <li class="nav-item">
                <a href="#" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-grid nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Registros anteriores</span>
                </a>
            </li>
        
            <li class="nav-item">
                <a href="#" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-bell-fill nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Notificaciones</span>
                </a>
            </li>
        
            <li class="nav-item">
                <a href="#" class="nav-link px-sm-0 px-2 text-white nav_link">
                    <i class="fs-4 bi-graph-up nav_icon"></i>
                    <span class="ms-1 d-none d-sm-inline nav_name">Estadisticas</span>
                </a>
            </li>
    
    </ul>
    <hr>
    <div class="text-center nav-item">
        <span class="fs-4 d-none d-sm-inline nav_name">Coordinador</span>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            
            

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Alba Alonso
                    </a>
                    <div class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Ajustes
                        </a>
                        <a class="dropdown-divider"a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        
                        </form>
                    </div>
                </li>

        </ul>
    </div>
</div>