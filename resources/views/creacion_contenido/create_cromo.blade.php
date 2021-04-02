@extends('layouts.plantilla')

@section('title', 'Añadir cromo')

@section('content')
    <form action="{{route('cromo.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Temporada:
            <input type="text" name="temporada" value="{{old('temporada')}}">
        </label>

        @error('temporada')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Imagen:
            <input type="file" name="urlImage" value="{{old('urlmage')}}">
        </label>

        @error('urlImagen')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Equipo:
            <input type="text" name="id_equipo" value="{{old('id_equipo')}}">
        </label>

        @error('id_equipo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection