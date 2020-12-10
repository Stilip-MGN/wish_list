@extends("layouts.app")

@section('title')Вход@endsection


@section('content')
    <div class="login-page">
        <div class="form">
            <form class="login-form">
                <input type="text" placeholder="username"/>
                <input type="password" placeholder="password"/>
                <button>login</button>
                <p class="message">Не зарегистрированы? <a href="/registration">Создайте аккаунт</a></p>
            </form>
        </div>
    </div>
@endsection
