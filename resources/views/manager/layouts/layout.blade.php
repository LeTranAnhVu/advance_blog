<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Manager Session</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="manager">
<div id="app">
    <header>
        @include('manager.layouts.header')
    </header>
    <div class="columns">
        {{--            side bar--}}
        <div class="column is-narrow">
            <aside>
                @include('manager.layouts.sidebar')
            </aside>
        </div>
        {{--        content--}}
        <div class="column">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</div>
</body>
</html>