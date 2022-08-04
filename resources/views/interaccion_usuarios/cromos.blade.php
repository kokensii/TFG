@extends('layouts.navbar')

@section('title', 'Listado de cromos')

@section('content')
<div class="no-wrapper">
    <div class="container withScroll">
        @php($indice=0)
        @foreach($jugadores as $jugador) 
            @if($jugador->id_equipo == $id)
                @if($indice % 4 == 0)
                    <div class="fila">
                @endif
                <div class="columna">
                    @php($variable = "../../../../" . $jugador->url_imagen)
                    <img src = {{$variable}} width=200 height=150>
                    <h2>{{ $jugador->nombre }}</h2>
                    @php($indice=$indice+1)
                </div>
                @if($indice % 4 == 0)
                </div>
                @endif
            @endif
        @endforeach
    </div>
</div>
@endsection