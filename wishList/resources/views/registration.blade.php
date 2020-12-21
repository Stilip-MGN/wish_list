@extends("layouts.app")

@section('title')Регистрация@endsection


@section('content')
    <div class="login-page">
        <div class="form" >
            <form action="{{route("registrated")}}" class="register-form" method="post">
                @csrf
                <input type="text" name="name"  placeholder="name"/>
                <input type="password" name="password"  placeholder="password"/>
                <input type="text" name="email" placeholder="email address"/>
                <button type="submit">create</button>
                <p class="message">Уже зарегистрированы? <a href="{{ route("sign") }}">Войди в аккаунт</a></p>
            </form>
            @if($errors->any())
                <div >
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="error">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
