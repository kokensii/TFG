@extends('layouts.plantilla')

@section('title', 'Editar round')

@section('content')
    <form action="{{route('round.update', $round)}}" method="post">
        @csrf
        @method('put')

        <label>
            Equipo Local:
            <input type="text" name="id_home_team" value="{{old('id_home_team', $round->id_home_team)}}">
        </label>

        @error('id_home_team')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Equipo Visitante:
            <input type="text" name="id_away_team" value="{{old('id_away_team', $round->id_away_team)}}">
        </label>

        @error('id_away_team')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Resultado:
            <input type="text" name="result" value="{{old('result', $round->result)}}">
        </label>

        @error('result')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar</button>
    </form>
@endsection