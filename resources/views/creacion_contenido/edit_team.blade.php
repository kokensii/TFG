@extends('layouts.plantilla')

@section('title', 'Editar equipo')

@section('content')
    <form action="{{route('team.update', $team)}}" method="PUT">
        @csrf
        @method('put')

        <label>
            Name:
            <input type="text" name="name" value="{{old('name', $team->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Temporada:
            <input type="text" name="temporada" value="{{old('temporada', $team->temporada)}}">
        </label>

        @error('temporada')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Imagen:
            <input type="file" name="urlImage" value="{{old('urlImage', $team->urlImage)}}">
        </label>

        @error('urlImage')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar</button>
    </form>
@endsection