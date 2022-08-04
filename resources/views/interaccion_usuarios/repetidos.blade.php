@extends('layouts.navbar')

@section('title', 'Listado de repetidos')

@section('content')
<div class="no-wrapper">
    <div class="container withScroll">
            @php($indice=0)
            @foreach($repetidosAgrupados as $agrupados)        
                @php($encontrado = false)
                @if($indice % 4 == 0)
                    <div class="fila">
                @endif
                @foreach($jugadores as $jugador)
                    @if($agrupados->id_player == $jugador->id && $encontrado==false)
                        <div class="columna">
                            @php($variable = "../../../../" . $jugador->url_imagen)
                            <img src = {{$variable}} width=200 height=150>
                            <h2>{{ $jugador->nombre }} {{ $agrupados->contador }}</h2>
                            @php($encontrado = true)
                            @php($indice=$indice+1)
                        </div>
                    @endif
                @endforeach
                @if($indice % 4 == 0)
                </div>
                @endif
            @endforeach
    </div>
</div>
@endsection