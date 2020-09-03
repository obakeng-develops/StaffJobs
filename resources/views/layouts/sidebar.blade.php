<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/791bec0a9e.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <nav class="sidebar bg-dark text-white w-100">
            <div class="sidebar-header">
                <div class="sidebar-img d-flex justify-content-center">
                    <img src="../public/img/ivana-cajina.jpg" width="70px" height="70px" class="rounded rounded-circle mt-4 mb-4"/>
                </div>

                <div class="d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item active mt-2 mb-2">
                            <a class="nav-link"><i class="fas fa-home fa-2x text-white"></i></a>
                        </li>
                        <li class="nav-item mt-2 mb-2">
                            <a class="nav-link"><i class="fas fa-users fa-2x text-white"></i></a>
                        </li>
                        <li class="nav-item mt-2 mb-2">
                            <a class="nav-link"><i class="fas fa-paperclip fa-2x text-white"></i></a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content -->
        <main class="py-4">
            @yield('content')
        </main>

    </div>

</body>
</html>