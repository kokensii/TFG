@extends('layouts.plantilla')

@section('title', 'Editar team')

@section('content')
    <form action="{{route('card.update', $card)}}" method="post">
        @csrf
        @method('put')

        <label>
            Name:
            <input type="text" name="name" value="{{old('name', $card->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Temporada:
            <input type="text" name="season" value="{{old('season', $card->season)}}">
        </label>

        @error('season')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Imagen:
            <input type="file" name="urlImage" value="{{old('urlImage', $card->urlImage)}}">
        </label>

        @error('urlImage')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Team:
            <input type="text" name="id_team" value="{{old('id_team', $card->id_team)}}">
        </label>

        @error('id_team')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar</button>
    </form>
@endsection