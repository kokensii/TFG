@extends('layouts.plantilla')

@section('title', 'Responder cuestionario')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="titleQuestion">{{ $questions->question }}</div>
            <form action="{{route('questionUser.isCorrect', $questions)}}" method="POST">
                @csrf

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans1" value="{{ $questions->correct_answer }}">
                            <label class="col-sm-2 form-check-label" for="ans1">
                              {{ $questions->correct_answer }}
                            </label>
                          </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans2" value="{{ $questions->bad_answer1 }}">
                            <label class="col-sm-2 form-check-label" for="ans2">
                              {{ $questions->bad_answer1 }}
                            </label>
                          </div>
                        </div>
                      </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans3" value="{{ $questions->bad_answer2 }}">
                            <label class="col-sm-2 form-check-label" for="ans3">
                              {{ $questions->bad_answer2 }}
                            </label>
                          </div>
                        </div>
                      </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" name="respuesta" type="radio" id="ans4" value="{{ $questions->bad_answer3 }}">
                            <label class="col-sm-2 form-check-label" for="ans4">
                              {{ $questions->bad_answer3 }}
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