@extends('layouts.plantilla')

@section('title', 'Añadir equipo')

@section('content')
    <!--
    <form class="formulario" action="{{route('team.store')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-1 col-form-label">Nombre</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
        </div>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="temporada" class="col-sm-1 col-form-label">Temporada</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="temporada" name="temporada" value="{{old('temporada')}}">
            </div>
        </div>

        @error('temporada')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="urlImage" class="col-sm-1 col-form-label">Imagen</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="urlImage" name="urlImage" value="{{old('urlImage')}}">
            </div>
        </div>

        @error('urlImagen')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
         <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </form>-->

    <div class="wrapper">
        <div class="form">
            <div class="title">Añadir Equipo</div>
            <form action="{{route('jornada.store')}}" method="POST">
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