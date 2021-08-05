@extends('layouts.plantilla')

@section('title', 'Listado cromos')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            @foreach($cromos as $cromo)
                <div class="form-all">
                    <li>{{$cromo->name}}</li>
                    <form action="{{ route('cromo.destroy', $cromo) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="{{ route('cromo.edit', $cromo) }}" method="GET">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection