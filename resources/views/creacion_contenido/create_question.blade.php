@extends('layouts.plantilla')

@section('title', 'Añadir pregunta')

@section('content')
    <!--<form class="formulario" action="{{route('question.store')}}" method="POST">
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
            <div class="title">Añadir Pregunta</div>
            <form action="{{route('jornada.store')}}" method="POST">
                @csrf
                <div class="form-details">
                    <div class="input-box">
                        <span class="details">Pregunta</span>
                        <input type="text" id="question" name="question" value="{{old('question')}}" required>
                    </div>

                    @error('question')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Respuesta Correcta</span>
                        <input type="text" id="correct_answer" name="correct_answer" value="{{old('correct_answer')}}" required>
                    </div>

                    @error('correct_answer')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Respuesta Incorrecta 1</span>
                        <input type="text" id="bad_answer1" name="bad_answer1" value="{{old('bad_answer1')}}" required>
                    </div>

                    @error('bad_answer1')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Respuesta Incorrecta 2</span>
                        <input type="text" id="bad_answer2" name="bad_answer2" value="{{old('bad_answer2')}}" required>
                    </div>

                    @error('bad_answer2')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Respuesta Incorrecta 3</span>
                        <input type="text" id="bad_answer3" name="bad_answer3" value="{{old('bad_answer3')}}" required>
                    </div>

                    @error('bad_answer3')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>

                <div class="button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
@endsection