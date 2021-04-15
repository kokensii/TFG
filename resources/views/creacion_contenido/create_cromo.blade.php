@extends('layouts.plantilla')

@section('title', 'Añadir cromo')

@section('content')
    <form class="formulario" action="{{route('cromo.store')}}" method="POST">
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
            <div class="col-sm-4">
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

        <div class="form-group row">
            <label for="id_equipo" class="col-sm-1 col-form-label">Equipo</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="id_equipo" name="id_equipo" value="{{old('id_equipo')}}">
            </div>
        </div>

        @error('id_equipo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </form>
@endsection