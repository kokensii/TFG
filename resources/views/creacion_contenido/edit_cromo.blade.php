@extends('layouts.plantilla')

@section('title', 'Editar equipo')

@section('content')
    <div class="form">
        <div class="title">Editar cromo</div>
        <form action="{{route('cromo.update', $cromo)}}" method="POST">
            @csrf
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" id="name" name="name" value="{{old('name', $cromo->name)}}">
                </div>

                @error('name')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
            
                <div class="input-box">
                    <span class="details">Temporada</span>
                    <input type="text" id="temporada" name="temporada" value="{{old('temporada', $cromo->temporada)}}">
                </div>

                @error('temporada')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Imagen</span>
                    <input type="text" id="urlImage" name="urlImage" value="{{old('urlImage', $cromo->urlImage)}}">
                </div>
            
                @error('urlImage')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo</span>
                    <input type="text" id="id_equipo" name="id_equipo" value="{{old('id_equipo', $cromo->id_equipo)}}">
                </div>

                @error('id_equipo')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="button">
                    <input type="submit" value="Enviar">
                </div>

        </form>
    </div>
@endsection