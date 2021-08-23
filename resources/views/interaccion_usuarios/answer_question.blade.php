@extends('layouts.plantilla')

@section('title', 'Responder cuestionario')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="titleQuestion">{{ $questions[$rand]->question }}</div>
            <form action="{{route('questionUser.isCorrect', $questions[$rand])}}" method="POST">
                @csrf

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans1" value="{{ $questions[$rand]->correct_answer }}">
                            <label class="col-sm-2 form-check-label" for="ans1">
                              a) {{ $questions[$rand]->correct_answer }}
                            </label>
                          </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans2" value="{{ $questions[$rand]->bad_answer1 }}">
                            <label class="col-sm-2 form-check-label" for="ans2">
                              b) {{ $questions[$rand]->bad_answer1 }}
                            </label>
                          </div>
                        </div>
                      </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans3" value="{{ $questions[$rand]->bad_answer2 }}">
                            <label class="col-sm-2 form-check-label" for="ans3">
                              c) {{ $questions[$rand]->bad_answer2 }}
                            </label>
                          </div>
                        </div>
                      </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans4" value="{{ $questions[$rand]->bad_answer3 }}">
                            <label class="col-sm-2 form-check-label" for="ans4">
                              d) {{ $questions[$rand]->bad_answer3 }}
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