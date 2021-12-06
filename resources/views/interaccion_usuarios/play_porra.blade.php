@extends('layouts.plantilla')

@section('title', 'Porra')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="title">Porra de la jornada {{ $betRound->id_jornada }}</div>
            <form action="{{route('bet.store')}}" method="POST">
                @csrf
                <div class="form-details">
                    <div class="input-box">
                        <span class="details">{{ $teams[$betRound->id_home_team - 1]->name }} vs {{ $teams[$betRound->id_away_team - 1]->name }}</span>
                        <select name="resultado">
                            <option value="1">1</option>
                            <option value="X">X</option>
                            <option value="2">2</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">{{ $teams[$betRound->id_home_team_2 - 1]->name }} vs {{ $teams[$betRound->id_away_team_2 - 1]->name }}</span>
                        <select name="resultado2">
                            <option value="1">1</option>
                            <option value="X">X</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="button" style="margin-top: 25%">
                    <input type="submit" value="Añadir resultados">
                </div>
            </form>
        </div>
    </div>
@endsection