<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">  <!-- Подключаем стили -->
    <link rel="icon" href="{{asset('assets/images/obraz-plus.ico')}}">  <!-- Подключаем иконку -->
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav>
        <div>
            <a href="/"> <img src="{{asset('assets/images/obraz-plus.png')}}" width="75" alt="Логотип"></a>
        </div>
        <ul>
            <li><a href="/">На главную</a></li>
            <li><a href="{{route('materials.index')}}">Материалы</a></li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>

</footer>
</body>
</html>
