<!doctype html>
<html lang="ru">
<head>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">Company name</p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </header>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<h1>Узнай желания каждого и расскажи про свои</h1>
<menu>
    @yield('menu')
</menu>
@yield('content')
</body>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <div class="author_name">
        Автор : Крыш Андрей Константинович<br/>
        Рабочая почта : work.post@mail.com<br/>
    </div>
    <div class="year">
        <?php echo date("Y") ?>
    </div>
</footer>
</html>
