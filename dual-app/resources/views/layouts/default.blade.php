<!doctype html>
<html>
    <head>

       @include('layouts.head')

    </head>

    <body>

        <div class="container-fluid">

            <main class="row flex-nowrap">

                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">

                    @include('layouts.sidebar')

                </div>

                <div class="col py-3">

                    @yield('content')

                </div>
            
            </main>

            <footer class="row justify-content-center align-items-center">

                @include('layouts.footer')

            </footer>

        </div>

    </body>

</html>