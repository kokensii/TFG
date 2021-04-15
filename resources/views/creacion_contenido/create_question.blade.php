@extends('layouts.plantilla')

@section('title', 'Añadir pregunta')

@section('content')
    <form class="formulario" action="{{route('question.store')}}" method="POST">
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
    </form>
@endsection