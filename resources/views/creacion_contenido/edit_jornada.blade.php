@extends('layouts.plantilla')

@section('title', 'Editar jornada')

@section('content')
    <div class="form">
        <div class="title">Editar jornada</div>
        <form action="{{route('jornada.update', $jornada)}}" method="POST">
            @csrf 
            @method('put')

            <div class="form-details">
                <div class="input-box">
                    <span class="details">Equipo Local 1</span>
                    <input type="text" id="id_equipo_local1" name="id_equipo_local1" value="{{old('id_equipo_local1', $jornada->id_equipo_local1)}}">
                </div>

                @error('id_equipo_local1')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Visitante 1</span>
                    <input type="text" id="id_equipo_visitante1" name="id_equipo_visitante1" value="{{old('id_equipo_visitante1', $jornada->id_equipo_visitante1)}}">
                </div>

                @error('id_equipo_visitante1')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Resultado 1</span>
                    <input type="text" id="resultado1" name="resultado1" value="{{old('resultado1', $jornada->resultado1)}}">
                </div>

                @error('resultado1')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Local 2</span>
                    <input type="text" id="id_equipo_local2" name="id_equipo_local2" value="{{old('id_equipo_local2', $jornada->id_equipo_local2)}}">
                </div>

                @error('id_equipo_local2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Equipo Visitante 2</span>
                    <input type="text" id="id_equipo_visitante2" name="id_equipo_visitante2" value="{{old('id_equipo_visitante2', $jornada->id_equipo_visitante2)}}">
                </div>

                @error('id_equipo_visitante2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Resultado 2</span>
                    <input type="text" id="resultado2" name="resultado2" value="{{old('resultado2', $jornada->resultado2)}}">
                </div>

                @error('resultado2')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="button">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
@endsection