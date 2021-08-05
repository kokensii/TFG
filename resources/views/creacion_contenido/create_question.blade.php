@extends('layouts.plantilla')

@section('title', 'Añadir pregunta')

@section('content')
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