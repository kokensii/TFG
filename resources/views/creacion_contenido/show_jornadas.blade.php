@extends('layouts.plantilla')

@section('title', 'Listado jornadas')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            @foreach($jornadas as $jornada)
                <div class="form-all">
                    <li>{{ $jornada->id }}</li>
                    <form action="{{ route('jornada.destroy', $jornada) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="{{ route('jornada.edit', $jornada) }}" method="GET">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection