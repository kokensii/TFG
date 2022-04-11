@extends('layouts.navbar')

@section('title', 'Listado de repetidos')

@section('content')
    <div class="wrapper">
        @foreach($jugadores as $player)
            {{ $player->id }}
            {{ $player->nombre }}
        @endforeach
    </div>
@endsection