@extends('layouts.plantilla')

@section('title', 'Editar team')

@section('content')
    <div class="form">
        <div class="title">Editar cromo</div>
        <form action="{{route('card.update', $card)}}" method="POST">
            @csrf
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" id="name" name="name" value="{{old('name', $card->name)}}">
                </div>

                @error('name')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" id="season" name="season" value="{{old('season', $card->season)}}">
                </div>

                @error('season')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Imagen</span>
                    <input type="text" id="urlImage" name="urlImage" value="{{old('urlImage', $card->urlImage)}}">
                </div>

                @error('urlImage')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo</span>
                    <input type="text" id="id_team" name="id_team" value="{{old('id_team', $card->id_team)}}">
                </div>

                @error('id_team')
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