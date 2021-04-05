@extends('layouts.plantilla')

@section('title', 'Añadir pregunta')

@section('content')
    <form action="{{route('question.store')}}" method="POST">
        @csrf
        <label>
            Pregunta:
            <input type="text" name="question" value="{{old('question')}}">
        </label>

        @error('question')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Respuesta correcta:
            <input type="text" name="correct_answer" value="{{old('correct_answer')}}">
        </label>

        @error('correct_answer')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Respuesta incorrecta 1:
            <input type="text" name="bad_answer1" value="{{old('bad_answer1')}}">
        </label>

        @error('bad_answer1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Respuesta incorrecta 2:
            <input type="text" name="bad_answer2" value="{{old('bad_answer2')}}">
        </label>

        @error('bad_answer2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Respuesta incorrecta 3:
            <input type="text" name="bad_answer3" value="{{old('bad_answer3')}}">
        </label>

        @error('bad_answer3')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection