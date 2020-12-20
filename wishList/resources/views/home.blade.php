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
            <?php
            $users_wishes = DB::table('users')
                ->Join('wishes', 'users.id', '=', 'wishes.user_id')
                ->select('users.name', 'wishes.wish_text')
                ->get();
            foreach ($users_wishes as $user_wish){
            ?>
            <tr>
                <td> <?php echo $user_wish->name?> </td>
                <td> <?php echo $user_wish->wish_text ?> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
@endsection
