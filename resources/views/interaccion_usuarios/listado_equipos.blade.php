@extends('layouts.navbar')

@section('title', 'Listado de equipos')

@section('content')
<div class="wrapper">
        @foreach($teams as $team)
            <div class="nombre_equipo">
                <a href="{{ route('card.index', $team->id) }}">
                    <h1>{{ $team->name }} (0/4)
                    @php($variable = "../../../../" . $team->urlImage)
                    <img src = {{$variable}} width=100 height=100>
                    </h1>
                </a> 
            </div>
        @endforeach
</div>
@endsection