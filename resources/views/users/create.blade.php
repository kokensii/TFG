@extends('layouts.plantilla')

@section('title', 'Inicio de sesión')

@section('content')
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <label>
            Nick:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Email:
            <input type="text" name="email" value="{{old('email')}}">
        </label>

        @error('email')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Contraseña:
            <input type="password" name="password">
        </label>

        @error('password')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection