@extends("layouts.app")

@section('title')Вход@endsection


@section('content')
    <div class="login-page">
        <div class="form">
            <form action="{{route("signed")}}" class="login-form" method="post">
                @csrf
                <input type="text" name ="user_name"  placeholder="username"/>
                <input type="password" name="user_password"  placeholder="password"/>
                <button type="submit">login</button>
                <p class="message">Не зарегистрированы? <a href="{{ route("registration") }}">Создайте аккаунт</a></p>
            </form>
        </div>
    </div>
@endsection
