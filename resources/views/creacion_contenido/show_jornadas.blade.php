@extends('layouts.plantilla')

@section('title', 'Listado rounds')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            @foreach($rounds as $round)
                <div class="form-all">
                    <li>{{ $round->id }}</li>
                    <form action="{{ route('round.destroy', $round) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="{{ route('round.edit', $round) }}" method="GET">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection