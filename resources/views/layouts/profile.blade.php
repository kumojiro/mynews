<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script  src="{{ secure_asset('js/app.js')}}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link "https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
</head>
<body>
    <div id ="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
            <div class="container">
                <a class=navbar-brand href="{{ url ('/') }}">
                    {{ config('app.name', 'Laravel')}}
                </a>
                <button class= "navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarSupportedContent" aria-controls="navbarSupportContent" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul clase = "navbar-nav mr-auto">
                    </ul>
                    <ul clase = "navbar-nav ml-auto">
                    </ul>
                </div>
            </div>
            
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>