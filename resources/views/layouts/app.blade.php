<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'To-Do') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Laravel CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"> <!-- Customize CSS -->
</head>
<body>
    <div id="app">
        <!-- Header-->
        <main  id="net">
            @include('layouts.header')
            <div class="py-4">
                <div class="container">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('status'))
                        <h6 class="alert alert-success">{{session('status')}}</h6>
                    @endif
                </div>
                @yield('content')
            </div>
        </main>
        <script>
            VANTA.NET({
                el: "main",
                mouseControls: false,
                touchControls: false,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 0.5,
                scaleMobile: 1.00
            })
        </script>

    </div>

</body>
</html>
