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

                <div class="col">
                    <div class="row">
                        <div class="col-12 py-3">
                            @yield('content')
                        </div>
                        
                        <div class="col-12 fixed-bottom justify-content-center align-items-center ">
                                @include('layouts.footer')
                        </div>
                    </div>
                </div>
            
            </main>

            <!-- <footer class="row justify-content-center align-items-center">
                <div class="col-auto justify-content-center align-items-center">
                    @include('layouts.footer')
                </div>
            </footer> -->

        </div>

    </body>

</html>