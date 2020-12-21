@extends("layouts.app")

@section('title')Редактирование желания@endsection


@section('content')
    <div class="form">
        <form action="{{route('update', $data->id)}}"  method="post" >
            @csrf
            <input type="text" name="wish" value="{{$data->wish_text}}"/>
            <button type="submit">Обновить</button>
        </form>
    </div>
@endsection
