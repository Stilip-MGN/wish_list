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
            <tr>
                <td>Stephen</td>
                <td>Большую яхту</td>
            </tr>
            <tr>
                <td>Josephin</td>
                <td>книга</td>
            </tr>
            <tr>
                <td>Joyce</td>
                <td>компуктер</td>
            </tr>
            <tr>
                <td>James</td>
                <td>слона</td>
            </tr>
        </table>
    </div>
@endsection
