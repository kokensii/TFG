@extends('layouts.plantilla')

@section('title', 'Añadir Jornada')

@section('content')
    <div class="form">
        <div class="title">Añadir Jornada</div>
        <form action="{{route('round.store')}}" method="POST">
            @csrf
            <div class="form-details">
                <div class="input-box">
                    <span class="details">Equipo Local</span>
                    <select name="id_home_team" required>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                @error('id_home_team')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Visitante</span>
                    <select name="id_away_team" required>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                @error('id_away_team')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Resultado</span>
                    <input type="text" id="result" name="result" value="{{old('result')}}" required>
                </div>

                @error('result')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

            <div class="button">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
@endsection