@extends('layouts.plantilla')

@section('title', 'Listado teams')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            @foreach($teams as $team)
                <div class="form-all">
                    <li>{{ $team->name }}</li>
                    <form action="{{ route('team.destroy', $team) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="{{ route('team.edit', $team) }}" method="GET">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection