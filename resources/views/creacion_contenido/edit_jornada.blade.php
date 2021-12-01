@extends('layouts.plantilla')

@section('title', 'Editar round')

@section('content')
    <div class="form">
        <div class="title">Editar jornada</div>
        <form action="{{route('round.update', $betRound)}}" method="post">
            @csrf
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Equipo Local</span>
                    <select name="id_home_team" required>
                        @foreach($teams as $team)
                            @if($team->id == old('id_home_team', $betRound->id_home_team))
                                <option value="{{$team->id}}" selected>{{$team->name}}</option>
                            @else
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                @error('id_home_team')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Local</span>
                    <select name="id_away_team" required>
                        @foreach($teams as $team)
                            @if($team->id == old('id_away_team', $betRound->id_away_team))
                                <option value="{{$team->id}}" selected>{{$team->name}}</option>
                            @else
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endif
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
                    <input type="text" name="result" value="{{old('result', $betRound->result)}}">
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
                            @if($team->id == old('id_home_team_2', $betRound->id_home_team_2))
                                <option value="{{$team->id}}" selected>{{$team->name}}</option>
                            @else
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endif
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
                            @if($team->id == old('id_away_team_2', $betRound->id_away_team_2))
                                <option value="{{$team->id}}" selected>{{$team->name}}</option>
                            @else
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endif
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
                    <input type="text" name="result_2" value="{{old('result_2', $betRound->result_2)}}">
                </div>

                @error('result_2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Jornada</span>
                    <input type="text" name="id_jornada" value="{{ old('id_jornada', $betRound->id_jornada) }}">
                </div>

                @error('id_jornada')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" name="season" value="{{ old('season', $betRound->season) }}">
                </div>

                @error('season')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">End</span>
                    <select name="end">
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Editar">
            </div>
        </form>
    </div>
@endsection