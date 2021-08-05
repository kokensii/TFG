@extends('layouts.plantilla')

@section('title', 'Jugar porra')

@section('content')
    <!--<form class="formulario" action="{{route('jornada.porra')}}" method="POST">
    </form>-->
    <div class="wrapper">
        <div class="form">
            <div class="title">Porra de la semana</div>
            <form action="{{route('jornada.store')}}" method="POST">
                @csrf
                <!--Habria que ver como hacer el foreach(Controller, y ya)-->
                <div class="form-details">
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <label class="col-sm-2 form-check-label" for="team1">
                                Real Madrid <!--Habria que coger el equipo de la BBDD-->
                            </label>
                            <input class="form-check-input" name="equipo1" type="number" min="0" id="team1" style="width:4em; height:2em">
                            -
                            <input class="form-check-input" name="equipo2" type="number" min="0" id="team2" style="width:4em; height:2em">
                            <label class="col-sm-2 form-check-label" for="ans2">
                               Barcelona
                            </label>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Siguente">
                </div>

            </form>
        </div>
    </div>
@endsection