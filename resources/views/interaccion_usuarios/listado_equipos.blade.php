@extends('layouts.navbar')

@section('title', 'Listado de equipos')

@section('content')
<div class="no-wrapper">
    <div class="container withScroll">
        @php($indice=0)
        @foreach($teams as $team)
                @if($indice % 4 == 0)
                    <div class="fila">
                @endif
                    <div class="columna">
                    <a href="{{ route('card.index', $team->id) }}">
                        @php($variable = "../../../../" . $team->urlImage)
                        <img src = {{$variable}} width=100 height=100>
                        <h2>{{ $team->name }}</h2>
                        <h4>{{ $numCards[$team->id-1] }}/4</h4>
                    </a>
                @php($indice=$indice+1)
            </div>
            @if($indice % 4 == 0)
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection