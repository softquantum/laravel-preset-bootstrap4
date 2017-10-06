<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="padding-top: 3.5rem;">
        @include('partials.topnav')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- {{--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap.native@2.0.14/dist/bootstrap-native-v4.min.js"></script>--}} -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-native-v4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/polyfill.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

</body>
</html>
