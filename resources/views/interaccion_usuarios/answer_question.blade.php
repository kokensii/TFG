@extends('layouts.plantilla')

@section('title', 'Responder cuestionario')

@section('content')
    <!--<form class="formulario" action="{{route('question.answer')}}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="question" class="col-sm-1 col-form-label">Pregunta</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="question" name="question" value="{{old('question')}}">
            </div>
        </div>

        @error('question')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="correct_answer" class="col-sm-2 col-form-label">Respuesta correcta</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="correct_answer" name="correct_answer" value="{{old('correct_answer')}}">
            </div>
        </div>

        @error('correct_answer')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="bad_answer1" class="col-sm-2 col-form-label">Respuesta incorrecta 1</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="bad_answer1" name="bad_answer1" value="{{old('bad_answer1')}}">
            </div>
        </div>

        @error('bad_answer1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="bad_answer2" class="col-sm-2 col-form-label">Respuesta incorrecta 2</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="bad_answer2" name="bad_answer2" value="{{old('bad_answer2')}}">
            </div>
        </div>

        @error('bad_answer2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        
        <div class="form-group row">
            <label for="bad_answer3" class="col-sm-2 col-form-label">Respuesta incorrecta 3</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="bad_answer3" name="bad_answer3" value="{{old('bad_answer3')}}">
            </div>
        </div>

        @error('bad_answer3')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </form>-->
    <div class="wrapper">
        <div class="form">
            <div class="title">Pregunta en cuestion</div>
            <form action="{{route('jornada.store')}}" method="POST">
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

                    @error('question')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

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

                    @error('correct_answer')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

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

                    @error('bad_answer1')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

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

                    @error('bad_answer2')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                <div class="button">
                    <input type="submit" value="Siguente">
                </div>
            </form>
        </div>
    </div>
@endsection