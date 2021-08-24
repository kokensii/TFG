@extends('layouts.plantilla')

@section('title', 'Listado cromos')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            @foreach($cards as $card)
                <div class="form-all">
                    <li>{{$card->name}}</li>
                    <li><img src="{{ asset($card->urlImage)}}"></li>
                    <form action="{{ route('card.destroy', $card) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="{{ route('card.edit', $card) }}" method="GET">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection