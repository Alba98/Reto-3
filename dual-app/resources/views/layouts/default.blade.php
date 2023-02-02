<!doctype html>
<html>
    
    <head>

       @include('layouts.head')

    </head>

    <body class="bg-light">

        <div class="container-fluid overflow-hidden">

            <div class="row vh-100 overflow-auto">

                <nav class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top" id="nav-bar">

                    @include('layouts.sidebar')

                </nav>

                <div class="col d-flex flex-column h-sm-100">

                    <main class="row overflow-auto">

                        <div class="col pt-4">
                            @auth
                                @yield('content')
                            @else
                                @include('errors.401')
                            @endauth
                        </div>

                    </main>

                    <footer class="row bg-light py-4 mt-auto">

                        <div class="col pt-4">

                            @include('layouts.footer')

                        </div>
                        
                    </footer>
                      
                </div>
            
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        </div>

    </body>

</html>