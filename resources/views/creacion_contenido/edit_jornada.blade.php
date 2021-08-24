@extends('layouts.plantilla')

@section('title', 'Editar round')

@section('content')
    <div class="form">
        <div class="title">Editar jornada</div>
        <form action="{{route('round.update', $round)}}" method="post">
            @csrf
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Equipo Local</span>
                    <input type="text" name="id_home_team" value="{{old('id_home_team', $round->id_home_team)}}">
                </div>

                @error('id_home_team')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Visitante</span>
                    <input type="text" name="id_away_team" value="{{old('id_away_team', $round->id_away_team)}}">
                </div>

                @error('id_away_team')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Resultado</span>
                    <input type="text" name="result" value="{{old('result', $round->result)}}">
                </div>

                @error('result')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <div class="button">
                <input type="submit" value="Editar">
            </div>
        </form>
    </div>
@endsection