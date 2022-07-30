@extends('layouts.navbar')

@section('title', 'Listado de repetidos')

@section('content')
{{-- <div class="container">
    <div class="">
<div class="prueba">
    <div class="pruebaCol">
        <h2>hola</h2>
    </div>
    <div class="pruebaCol">
        <h2>que tal </h2>
    </div>
    <div class="pruebaCol">
        <h2> adios </h2>
    </div>
    
</div>
<div class="prueba">
    <div class="pruebaCol">
        <h2>hola</h2>
    </div>
    <div class="pruebaCol">
        <h2>que tal </h2>
    </div>
    <div class="pruebaCol">
        <h2> adios </h2>
    </div>
    
</div>

    </div>
</div> --}}
    <div class="container">
        <div class="prueba">
            @php($indice=0)
        @foreach($repetidosAgrupados as $agrupados)
        
        @php($encontrado = false)
        @if($indice % 4 == 0)
        <div class="pruebaCol">
            @endif
            @foreach($jugadores as $jugador)
                @if($agrupados->id_player == $jugador->id && $encontrado==false)
               
                    @php($variable = "../../../../" . $jugador->url_imagen)
                    <img src = {{$variable}} width=200 height=150>
                    <h2>{{ $jugador->nombre }}</h2>
                    <h2>{{ $agrupados->contador }}</h2>
                    @php($encontrado = true)
                @endif
            @endforeach
            @if($indice % 4 == 0)
        </div>
        @endif
        @php($indice=$indice+1)
        @endforeach
        </div>
    </div>
@endsection