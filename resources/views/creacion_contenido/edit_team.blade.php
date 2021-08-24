@extends('layouts.plantilla')

@section('title', 'Editar team')

@section('content')
    <div class="form">
        <div class="title">Editar equipo</div>
        <form class="formulario" action="{{route('team.update', $team)}}" method="post">
            @csrf
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name', $team->name)}}">
                </div>

                @error('name')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" class="form-control" id="season" name="season" value="{{old('season', $team->season)}}">
                </div>

                @error('season')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Imagen</span>
                    <input type="file" class="form-control" id="urlImage" name="urlImage" value="{{old('urlImage', $team->urlImage)}}">
                </div>

                @error('urlImage')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <div class="button">
                <input type="submit" value="Editar">
            </div>
        </form>
    </div>
@endsection