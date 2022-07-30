@extends('layouts.navbar')

@section('title', 'Listado de cromos')

@section('content')
<div class="wrapper">
    @foreach($jugadores as $jugador)
        @if($jugador->id_equipo == $id)
            <div class="jugador">
                @php($variable = "../../../../" . $jugador->url_imagen)
                <img src = {{$variable}} width=200 height=150>
                <h2>{{ $jugador->nombre }}</h2>
             </div>
         @endif
     @endforeach
</div>
@endsection


{{--<div class="cromos">
    <div class="nombre_equipo">
        <h1>{{ $team->name }} (0/4)</h1>
    </div>
    <div class="equipo">
        @foreach($jugadores as $jugador)
            @if($jugador->id_equipo == $team->id)
                <div class="jugador">
                    @php($variable = "../../../" . $jugador->url_imagen)
                    <img src = {{$variable}} width=200 height=150>
                    <h2>{{ $jugador->nombre }}</h2>
                </div>
            @endif
        @endforeach
    </div>
</div>
--}}


{{--<form action="{{ route('card.index', $team->name) }}" method="POST" style="width: 100%">
            <div class="nombre_equipo">
                <h1>{{ $team->name }} (0/4)</h1>
            </div>
            <div class="equipo">
                @foreach($jugadores as $jugador)
                    @if($jugador->id_equipo == $team->id)
                        <div class="jugador">
                            @php($variable = "../../../" . $jugador->url_imagen)
                            <img src = {{$variable}} width=200 height=150>
                            <h2>{{ $jugador->nombre }}</h2>
                        </div>
                    @endif
                @endforeach
            </div>
            @csrf
             <link class="custom-button">{{$team->name}}</button>
        </form>
        <h2>
            <a href="{{ route('card.index', $team->name) }}">{{$team->name}}</a>
        </h2>
--}}