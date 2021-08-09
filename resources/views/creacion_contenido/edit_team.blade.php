@extends('layouts.plantilla')

@section('title', 'Editar team')

@section('content')
    <form class="formulario" action="{{route('team.update', $team)}}" method="post">
        @csrf
        @method('put')

        <div class="form-group row">
            <label for="name" class="col-sm-1 col-form-label">Nombre</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $team->name)}}">
            </div>
        </div>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="season" class="col-sm-1 col-form-label">Temporada</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="season" name="season" value="{{old('season', $team->season)}}">
            </div>
        </div>

        @error('season')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="urlImage" class="col-sm-1 col-form-label">Imagen</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="urlImage" name="urlImage" value="{{old('urlImage', $team->urlImage)}}">
            </div>
        </div>

        @error('urlImage')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit" class="btn btn-outline-primary">Editar</button>
    </form>
@endsection