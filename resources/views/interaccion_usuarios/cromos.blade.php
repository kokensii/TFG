@extends('layouts.navbar')

@section('title', 'Listado de cromos')

@section('content')
    <div class="">
        @foreach($teams as $team)
            <h1>{{ $team->name }} (0/4)</h1>
            @foreach($jugadores as $jugador)
                @if($jugador->id_equipo == $team->id)
                    {{ $jugador->nombre }}
                @endif
            @endforeach
        @endforeach
        {{-- @foreach($jugadores as $player)
            {{ $player->id }}
            {{ $player->nombre }}
        @endforeach --}}
    </div>
@endsection