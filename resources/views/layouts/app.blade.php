<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fox') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    @yield('content')
                </div>
                <div class="col-md-3 col-lg-3">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>

        <footer class="footer text-center">
          <div class="container">
            Copyright &copy; 2017 by the devs &bull; <a href="{{ route('impressum') }}">Impressum</a>
          </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
