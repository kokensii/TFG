@extends('layouts.plantilla')

@section('title', 'Listado cromos')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            @foreach($players as $player)
                <div class="form-all">
                    <li>{{$player->nombre}}</li>
                    <form action="{{ route('player.destroy', $player) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="{{ route('player.edit', $player) }}" method="GET">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection