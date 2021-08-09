@extends('layouts.plantilla')

@section('title', 'Añadir Cromo')

@section('content')
    <div class="form">
        <div class="title">Añadir Cromo</div>
        <form action="{{route('card.store')}}" method="POST">
            @csrf

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" id="name" name="name" value="{{old('name')}}" required>
                </div>

                @error('name')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" id="season" name="season" value="{{old('season')}}" required>
                </div>

                @error('season')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Imagen</span>
                    <input type="file" id="urlImage" name="urlImage" value="{{old('urlImage')}}">
                </div>

                @error('urlImage')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Team</span>
                    <select name="id_team" required>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                @error('id_team')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <div class="button">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
@endsection