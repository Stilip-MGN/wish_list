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
                ->where('users.id', Auth::user()->id)
                ->Join('wishes', 'users.id', '=', 'wishes.user_id')
                ->select('wishes.wish_text','wishes.id')
                ->get();
            if (count($users_wishes) == 0){?>
            <tr>
                <td class="name"> <?php echo "У меня пока нет желаний" ?> </td>
                <td></td>
                <td></td>
            </tr>
            <?php
            }
            foreach ($users_wishes as $user_wish){
            ?>
            <tr>
                <td class="name"> <?php echo $user_wish->wish_text ?> </td>
                <td><a href="{{route("redaction", $user_wish->id)}}"><button  type="submit">Редактировать</button></a></td>
                <td><a href="{{route("delete", $user_wish->id)}}"><button >Удалить</button></a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
@endsection
