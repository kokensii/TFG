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
                    <input type="text" id="result" name="result" value="{{old('result')}}">
                </div>

                @error('result')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Local 2</span>
                    <select name="id_home_team_2" required>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                @error('id_home_team_2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Visitante 2</span>
                    <select name="id_away_team_2" required>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                @error('id_away_team_2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Resultado 2</span>
                    <input type="text" id="result_2" name="result_2" value="{{old('result_2')}}">
                </div>

                @error('result_2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Jornada</span>
                    <input type="text" id="id_jornada" name="id_jornada" value="{{ old('id_jornada') }}" required>
                </div>

                @error('id_jornada')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" id="season" name="season" value="{{ old('season') }}" required>
                </div>
            </div>
            
            <div class="button">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
@endsection