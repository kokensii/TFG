@extends('layouts.plantilla')

@section('title', 'Editar equipo')

@section('content')
    <form action="{{route('cromo.update', $cromo)}}" method="post">
        @csrf
        @method('put')

        <label>
            Name:
            <input type="text" name="name" value="{{old('name', $cromo->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Temporada:
            <input type="text" name="temporada" value="{{old('temporada', $cromo->temporada)}}">
        </label>

        @error('temporada')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Imagen:
            <input type="file" name="urlImage" value="{{old('urlImage', $cromo->urlImage)}}">
        </label>

        @error('urlImage')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Equipo:
            <input type="text" name="id_equipo" value="{{old('id_equipo', $cromo->id_equipo)}}">
        </label>

        @error('id_equipo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar</button>
    </form>
@endsection