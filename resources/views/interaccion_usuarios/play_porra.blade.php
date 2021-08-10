@extends('layouts.plantilla')

@section('title', 'Jugar porra')

@section('content')
    <!--<form class="formulario" action="{{route('round.porra')}}" method="POST">
    </form>-->
    <div class="wrapper">
        <div class="form">
            <div class="title">Porra de la semana</div>
            <form action="{{route('round.porra')}}" method="POST">
                @csrf
                @foreach($rounds as $round)
                <div class="form-details">
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <label class="col-sm-2 form-check-label" for="team1">
    
                               {{-- @if($round->id_home_team = $teams[$round->id_home_team-1]->id) --}}
                                {{old('name', $teams[$round->id_home_team-1]->name)}}
                              {{--  @endif --}}

                                {{--{{old('id_home_team', $round->id-home_team)}}--}}
                            </label>
                            <input class="form-check-input" name="equipo1" type="number" min="0" id="team1" style="width:4em; height:2em">
                            -
                            <input class="form-check-input" name="equipo2" type="number" min="0" id="team2" style="width:4em; height:2em">
                            <label class="col-sm-2 form-check-label" for="ans2">
                                @if($round->id_away_team = $teams[$round->id_away_team-1]->id)
                                {{old('name', $teams[$round->id_away_team-1]->name)}}
                                @endif

                                {{--{{old('id_away_team', $round->id_away_team)}}--}}
                            </label>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="button">
                    <input type="submit" value="Enviar">
                </div>

            </form>
        </div>
    </div>
@endsection