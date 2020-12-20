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
            </tr>
            <tr>
                <td>Большую яхту</td>
            </tr>
            <tr>
                <td>книга</td>
            </tr>
            <tr>
                <td>компуктер</td>
            </tr>
            <tr>
                <td>слона</td>
            </tr>
        </table>
    </div>
@endsection
