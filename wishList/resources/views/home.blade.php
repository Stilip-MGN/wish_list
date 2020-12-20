@extends("layouts.app")

@section('header')
    @if(session("success"))
        <div class="success">
            {{ session('success') }}
        </div>
    @else
        <a class="sign_and_reg" href="{{ route("sign") }}">Вход</a>
        <a class="sign_and_reg" href="{{ route("registration") }}">Регистрация</a>
    @endif

@endsection

@section('title')Главная@endsection


@section('content')
    <div class="table_main">
        <table>
            <tr>
                <th>Пользователь</th>
                <th>Желание</th>
            </tr>
            
        </table>
    </div>
@endsection
