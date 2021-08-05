@extends('layouts.plantilla')

@section('title', 'Añadir jornada')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="title">Añadir Jornada</div>
            <form action="{{route('jornada.store')}}" method="POST">
                @csrf
                <div class="form-details">
                    <div class="input-box">
                        <span class="details">Equipo Local 1</span>
                        <select name="id_equipo_local1" required>
                            @foreach($equipos as $equipo)
                                <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('id_equipo_local1')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Equipo Visitante 1</span>
                        <select name="id_equipo_visitante1" required>
                            @foreach($equipos as $equipo)
                                <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('id_equipo_visitante1')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Resultado 1</span>
                        <input type="text" id="resultado1" name="resultado1" value="{{old('resultado1')}}" required>
                    </div>

                    @error('resultado1')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                    
                    <div class="input-box">
                        <span class="details">Equipo Local 2</span>
                        <select name="id_equipo_local2" required>
                            @foreach($equipos as $equipo)
                                <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('id_equipo_local2')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Equipo Visitante 2</span>
                        <select name="id_equipo_visitante2" required>
                            @foreach($equipos as $equipo)
                                <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('id_equipo_visitante2')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="input-box">
                        <span class="details">Resultado 2</span>
                        <input type="text" id="resultado2" name="resultado2" value="{{old('resultado2')}}" required>
                    </div>

                    @error('resultado2')
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
    </div>
@endsection