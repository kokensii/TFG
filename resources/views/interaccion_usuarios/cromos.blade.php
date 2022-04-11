@extends('layouts.navbar')

@section('title', 'Listado de cromos')

@section('content')
    <div class="wrapper">
        @foreach($jugadores as $player)
            {{ $player->id }}
            {{ $player->nombre }}
        @endforeach
    </div>
@endsection