@extends('layouts.plantilla')

@section('title', 'Añadir cromo')

@section('content')
    <div class="form">
        <div class="title">Añadir Cromo</div>
        <form action="{{route('cromo.store')}}" method="POST">
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
                    <input type="text" id="temporada" name="temporada" value="{{old('temporada')}}" required>
                </div>

                @error('temporada')
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
                    <span class="details">Equipo</span>
                    <select name="id_equipo" required>
                        @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->name}}</option>
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