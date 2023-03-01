<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("style_kit/main.css") }}">
    <link rel="stylesheet" href="{{ asset("style_kit/form_pupil.css") }}">
    <title>КИТ</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="top_header">
            <div class="logo">
                <a href=" {{ route('pupil.index') }} ">
                    <div class="logo_img"><img src="{{ asset('style_kit/img/kit.png') }}" width="25" height="45" alt=""></div>
                    <div class="logo_text">КИТ</div>
                </a>
            </div>
            <div class="admin_enter d-flex align-items-center">
                <div>Привет, {{ auth()->user()->name }} </div>
                <div>
                    <form action="{{ route('logout') }}" method="POST" class="ml-3">
                        @csrf
                        <input type="submit" value="Выйти" class="btn btn-light">
                    </form>
                </div>
            </div>
        </div>
        <nav class="nav">
            <ul>
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="#">Списки</a></li>
                <li><a href="#">Архив</a></li>
                <li><a href="#">Воспитатели</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">©Кит</footer>
</div>
</body>
</html>
