@extends('layouts.plantilla')

@section('title', 'Editar usuario')

@section('content')
    <form action="{{route('user.update', $user)}}" method="post">
        @csrf
        @method('put')

        <label>
            Nick:
            <input type="text" name="name" value="{{old('name', $user->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Email:
            <input type="text" name="email" value="{{old('email', $user->email)}}">
        </label>

        @error('email')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Contraseña:
            <input type="password" name="password" value="{{old('password', $user->password)}}">
        </label>

        @error('password')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar</button>
    </form>
@endsection