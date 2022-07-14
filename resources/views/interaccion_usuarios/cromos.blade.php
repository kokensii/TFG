@extends('layouts.navbar')

@section('title', 'Listado de cromos')

@section('content')
    <div class="wrapper">
        @foreach($teams as $team)
            <h1>{{ $team->name }} (0/4)</h1>
            @foreach($jugadores as $jugador)
                @if($jugador->id_equipo == $team->id)
                    {{ $jugador->nombre }}
                    {{ $jugador->id }}
                    {{ $jugador->nombre }}
                    @php($variable = "../../../" . $jugador->url_imagen)
                    <img src = {{$variable}} width=200>
        
                @endif
            @endforeach
        @endforeach
    </div>
@endsection