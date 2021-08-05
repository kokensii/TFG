@extends('layouts.plantilla')

@section('title', 'Editar jornada')

@section('content')
    <form action="{{route('jornada.update', $jornada)}}" method="post">
        @csrf
        @method('put')

        <label>
            Equipo Local 1:
            <input type="text" name="id_equipo_local1" value="{{old('id_equipo_local1', $jornada->id_equipo_local1)}}">
        </label>

        @error('id_equipo_local1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Equipo Visitante 1:
            <input type="text" name="id_equipo_visitante2" value="{{old('id_equipo_local2', $jornada->id_equipo_visitante1)}}">
        </label>

        @error('id_equipo_visitante1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Resultado 1:
            <input type="text" name="resultado1" value="{{old('resultado1', $jornada->resultado1)}}">
        </label>

        @error('resultado1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Equipo Local 2:
            <input type="text" name="id_equipo_local2" value="{{old('id_equipo_local2', $jornada->id_equipo_local2)}}">
        </label>

        @error('id_equipo_local2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Equipo Visitante 2:
            <input type="text" name="id_equipo_visitante2" value="{{old('id_equipo_visitante2', $jornada->id_equipo_visitante2)}}">
        </label>

        @error('id_equipo_visitante2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Resultado 2:
            <input type="text" name="resultado2" value="{{old('resultado2', $jornada->resultado2)}}">
        </label>

        @error('resultado2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar</button>
    </form>
@endsection