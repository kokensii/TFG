@extends('layouts.plantilla')

@section('title', 'Editar equipo')

@section('content')
    <div class="form">
        <div class="title">Editar pregunta</div>
        <form action="{{route('team.update', $team)}}" method="POST">
            @csrf
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" name="name" id="name" value="{{old('team', $team->name)}}">
                </div>

                @error('name')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" name="temporada" id="temporada" value="{{old('temporada', $team->temporada)}}">
                </div>

                @error('temporada')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Imagen</span>
                    <input type="file" name="urlImage" id="urlImage" value="{{old('urlImage', $team->urlImage)}}">
                </div>

                @error('urlImage')
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