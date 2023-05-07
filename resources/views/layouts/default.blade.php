<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">

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
                <div class="header-item">Главная</div>
                <div class="header-item">Компаниям</div>
                <div class="header-item">Мероприятия</div>
            </div>
            <div class="header-menu-right">
                <button><a href="/">о нас</a></button>
            </div>
        </div>
    </header>
</div>
    @yield('content')
<footer>
    @ KUDA POITI 2023
    <span>kudapoiti@gmail.com</span>
</footer>
</body>
</html>
