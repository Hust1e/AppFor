<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Главная</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
{{--    @vite('resources/css/app.css')--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="body-wrapper">
    <header>
        <div class="header-wrapper">
            <div class="header-logo">
                <div class="header-item">КУДА ПОЙДЕМ?</div>
            </div>
            <div class="header-menu-center">
                <div class="header-item"><a href="/">Главная</a></div>
                <div class="header-item"><a href="/company">Компаниям</a></div>
                <div class="header-item"><a href="/events">Мероприятия</a></div>
            </div>
            <div class="header-menu-right">
                <div class="header-button">
                    <a href="#anchor-link1">о нас</a>
                </div>
            </div>
        </div>
    </header>
</div>
    @yield('content')
<footer>
    @ KUDA POITI 2023
    <span>kudapoiti@gmail.com</span>
</footer>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
