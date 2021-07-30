@extends('layouts.plantilla')

@section('title', 'Editar pregunta')

@section('content')
    <div class="form">
        <div class="title">Editar pregunta</div>
        <form action="{{route('question.update', $question)}}" method="POST">
            @csrf
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Pregunta</span>
                    <input type="text" name="question" id="question" value="{{old('question', $question->question)}}">
                </div>

                @error('question')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Respuesta correcta</span>
                    <input type="text" name="correct_answer" id="correct_answer" value="{{old('correct_answer', $question->correct_answer)}}">
                </div>

                @error('correct_answer')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Respuesta incorrecta 1</span>
                    <input type="text" name="bad_answer1" id="bad_answer1" value="{{old('bad_answer1', $question->bad_answer1)}}">
                </div>

                @error('bad_answer1')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Respuesta incorrecta 2</span>
                    <input type="text" name="bad_answer2" id="bad_answer2" value="{{old('bad_answer2', $question->bad_answer2)}}">
                </div>

                @error('bad_answer2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Respuesta incorrecta 3</span>
                    <input type="text" name="bad_answer3" id="bad_answer3" value="{{old('bad_answer3', $question->bad_answer3)}}">
                </div>

                @error('bad_answer3')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="button">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
@endsection