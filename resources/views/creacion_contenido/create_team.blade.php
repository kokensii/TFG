@extends('layouts.plantilla')

@section('title', 'Añadir equipo')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="title">Añadir Equipo</div>
            <form action="{{route('team.store')}}" method="POST">
                @csrf
                <div class="form-details">
                    <div class="input-box">
                        <span class="details">Nombre</span>
                        <input type="text" id="name" name="name" value="{{old('name')}}" required>
                    </div>

                    @error('name')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Temporada</span>
                        <input type="text" id="temporada" name="temporada" value="{{old('temporada')}}" required>
                    </div>

                    @error('temporada')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Imagen</span>
                        <input type="file" id="urlImage" name="urlImage" value="{{old('urlImage')}}">
                    </div>

                    @error('urlImage')
                        <br>
                        <small>*{{$meessage}}</small>
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