@extends('layouts.plantilla')

@section('title', 'Jugar porra')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="title">Porra de la semana</div>
            <form action="{{route('porra.store')}}" method="POST">
                @csrf
                @foreach($rounds as $round)
                <div class="form-details">
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <label class="col-sm-2 form-check-label" for="id_home_team">
                                {{$teams[$round->id_home_team-1]->name}}
                            </label>
                            
                           
                            
                            <input class="id_rounds" name="id_rounds" type="hidden" id="id_rounds" value="{{$round->id_rounds}}" required>

                            <input class="id_home_team" name="id_home_team" type="hidden" id="id_home_team" value="{{$teams[$round->id_home_team-1]->id}}" required>  
                            <input class="form-check-input" name="result_home" type="number" min="0" id="result_home" style="width:4em; height:2em" value="{{old('result_home')}}" required>
                            -
                            <input class="form-check-input" name="result_away" type="number" min="0" id="result_away" style="width:4em; height:2em" value="{{old('result_away')}}" required>                            
                            <input class="id_away_team" name="id_away_team" type="hidden" id="id_away_team" value="{{$teams[$round->id_away_team-1]->id}}" required>
                         

                            <label class="col-sm-2 form-check-label" for="id_away_team">    
                                {{$teams[$round->id_away_team-1]->name}} 
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