@extends('layouts.plantilla')

@section('title', 'Añadir Cromo')

@section('content')
    <div class="form">
        <div class="title">Añadir Cromo</div>
        <form action="{{route('player.store')}}" method="POST">
            @csrf

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" required>
                </div>

                @error('nombre')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                {{-- <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" id="season" name="season" value="{{old('season')}}" required>
                </div>

                @error('season')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror --}}

                <div class="input-box">
                    <span class="details">Imagen</span>
                    <input type="file" id="url_imagen" name="url_imagen" value="{{old('url_imagen')}}">
                </div>

                @error('url_imagen')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Team</span>
                    <select name="id_equipo" required>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                @error('id_equipo')
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