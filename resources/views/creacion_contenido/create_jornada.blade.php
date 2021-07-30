@extends('layouts.plantilla')

@section('title', 'Añadir jornada')

@section('content')
    <!--<form class="formulario" action="{{route('jornada.store')}}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="id_equipo_local1" class="col-sm-2 col-form-label">Equipo Local 1</label>
            <div class="col-sm-4">
            <select name="id_equipo_local1" style="height: 100%;">
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                @endforeach
            </select>
            </div>
        </div>

        @error('id_equipo_local1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="id_equipo_visitante1" class="col-sm-2 col-form-label">Equipo Visitante 1</label>
            <div class="col-sm-4">
            <select name="id_equipo_visitante1" style="height: 100%;">
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                @endforeach
            </select>
            </div>
        </div>

        @error('id_equipo_visitante1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="resultado1" class="col-sm-2 col-form-label">Resultado 1</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="resultado1" name="resultado1" value="{{old('resultado1')}}">
            </div>
        </div>

        @error('resultado1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="id_equipo_local2" class="col-sm-2 col-form-label">Equipo Local 2</label>
            <div class="col-sm-4">
            <select name="id_equipo_local2" style="height: 100%;">
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                @endforeach
            </select>
            </div>
        </div>

        @error('id_equipo_local2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="id_equipo_visitante2" class="col-sm-2 col-form-label">Equipo Visitante 2</label>
            <div class="col-sm-4">
            <select name="id_equipo_visitante2" style="height: 100%;">
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                @endforeach
            </select>
            </div>
        </div>

        @error('id_equipo_visitante2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <div class="form-group row">
            <label for="resultado2" class="col-sm-2 col-form-label">Resultado 2</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="resultado2" name="resultado2" value="{{old('resultado2')}}">
            </div>
        </div>

        @error('resultado2')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </form>-->
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