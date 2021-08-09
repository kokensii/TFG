@extends('layouts.plantilla')

@section('title', 'Responder cuestionario')

@section('content')
    <!--<form class="formulario" action="{{route('question.answer')}}" method="POST">
    </form>-->
    <div class="wrapper">
        <div class="form">
            <div class="title">Pregunta en cuestion</div>
            <form action="{{route('round.store')}}" method="POST">
                @csrf
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans1">
                            <label class="col-sm-2 form-check-label" for="ans1">
                              a)
                            </label>
                          </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans2">
                            <label class="col-sm-2 form-check-label" for="ans2">
                              b)
                            </label>
                          </div>
                        </div>
                      </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans3">
                            <label class="col-sm-2 form-check-label" for="ans3">
                              c)
                            </label>
                          </div>
                        </div>
                      </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans4">
                            <label class="col-sm-2 form-check-label" for="ans4">
                              d)
                            </label>
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