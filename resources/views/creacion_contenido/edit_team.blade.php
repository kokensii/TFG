@extends('layouts.plantilla')

@section('title', 'Editar equipo')

@section('content')
    <form action="{{route('user.update', $user)}}" method="PUT">
        @csrf
        @method('put')

        <label>
            Name:
            <input type="text" name="name" value="{{old('name', $user->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Temporada:
            <input type="text" name="temporada" value="{{old('temporada', $user->email)}}">
        </label>

        @error('temporada')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Imagen:
            <input type="text" name="urlImage" value="{{old('urlImage', $user->password)}}">
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