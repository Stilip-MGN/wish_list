@extends("layouts.app")

@section('title')Желание@endsection


@section('content')
    <div class="form">
        <form action="{{route("add_wish")}}"  method="post" >
            @csrf
            <input type="text" name="wish"  placeholder="new wish"/>
            <button type="submit">Добавить</button>
        </form>
    </div>

    <div class="table_main">
        <table>
            <tr>
                <th>Мои желания</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            $users_wishes = DB::table('users')
                ->where('users.id', 1)
                ->Join('wishes', 'users.id', '=', 'wishes.user_id')
                ->select('wishes.wish_text')
                ->get();
            foreach ($users_wishes as $user_wish){
            ?>
            <tr>
                <td> <?php echo $user_wish->wish_text ?> </td>
                <td><button>Редактировать</button></td>
                <td><button>Удалить</button></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
@endsection
