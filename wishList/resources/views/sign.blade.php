@extends("layouts.app")

@section('title')Вход@endsection


@section('content')



    <div class="login-page">

        <div class="form">
            @if(session("success"))
                <div class="success">
                    {{ session('success') }}
                </div>
            @endif

                @if(session("fatal"))
                    <div class="fatal">
                        {{ session('fatal') }}
                    </div>
                @endif
            <form action="{{route("signed")}}" class="login-form" method="post">
                @csrf
                <input type="text" name ="user_name"  placeholder="username"/>
                <input type="password" name="user_password"  placeholder="password"/>
                <button type="submit">login</button>
                <p class="message">Не зарегистрированы? <a href="{{ route("registration") }}">Создайте аккаунт</a></p>
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
