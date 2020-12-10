@extends("layouts.app")

@section('title')Вход@endsection


@section('content')
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Уже зарегистрированы? <a href="/sign">Войди в аккаунт</a></p>
            </form>
        </div>
    </div>
@endsection
