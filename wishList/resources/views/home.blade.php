@extends("layouts.app")


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
                ->orderBy('users.name')
                ->get();
            $last_name = null;
            foreach ($users_wishes as $user_wish){
                if ($user_wish->name != $last_name )
                {
                    if ($last_name != null)
            ?></td></tr><tr><td class="name"><?php echo $user_wish->name?> </td><td>
                    <?php
                }
                else
                    ?><li><?php echo $user_wish->wish_text ?> </li>
            <?php
            $last_name = $user_wish->name;
            }
            ?></td></tr>
        </table>
    </div>
@endsection
