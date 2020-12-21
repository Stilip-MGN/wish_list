<!doctype html>
<html lang="ru">
<head>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <div class="sign_reg">
            @if(optional(\Auth::user())->id)
                <h3 >Пользователь:{{optional(\Auth::user())->name}} </h3>
                <li class="sign_and_reg"><a class="sign_and_reg" href="{{ route("logout_form") }}">Выйти </a> </li>
            @else
                <a class="sign_and_reg" href="{{ route("sign") }}">Вход</a>
                <a class="sign_and_reg" href="{{ route("registration") }}">Регистрация</a>
            @endif
        </div>
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    </header>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<div class="wish_text">
    <h1 >Узнай желания каждого и расскажи про свои</h1>
</div>


<menu>
    <div class="menu_args">
    <li class="menu_stile"><a class="text_menu_stile" href="{{ route("home") }}">Главная</a></li>
        @if(optional(\Auth::user())->id)
            <li class="menu_stile"><a class="text_menu_stile" href="{{ route("wish") }}">Мои желания</a></li>
        @endif
    </div>
</menu>

@yield('content')
</body>
<footer >
    <div class="author_name">
        Автор : Крыш Андрей Константинович<br/>
        Рабочая почта : work.post@mail.com<br/>
    </div>
    <div class="year">
        <?php echo date("Y") ?>
    </div>
</footer>
</html>
