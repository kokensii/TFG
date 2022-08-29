@extends('layouts.navbar')

@section('title', 'Listado de repetidos')

@section('content')
<div class="no-wrapper">
    <div class="container">
            @php($indice=0)
            @foreach($repetidosAgrupados as $agrupados)        
                @php($encontrado = false)
                @foreach($jugadores as $jugador)
                    @if($agrupados->id_player == $jugador->id && $encontrado==false)
                        @if($indice % 4 == 0)
                            <div class="fila">
                        @endif
                        <div class="columna">
                            @php($variable = "../../../../" . $jugador->url_imagen)
                            <img src = {{$variable}} width=200 height=150>
                            <h2>{{ $jugador->nombre }} {{ $agrupados->contador }}</h2>
                            @php($encontrado = true)
                            @php($indice=$indice+1)
                        </div>
                        @if($indice % 4 == 0)
                            </div>
                        @endif
                    @endif
                @endforeach
                
            @endforeach
    </div>
</div>
@endsection