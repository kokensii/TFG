@extends('layouts.navbar')

@section('content')
<div class="no-wrapper">
    <div class="container">
        <div class="fila">
            <div class="columna">
                <img src = "../../../../TFGJulio/public/img/logoUser.jpg" height=220>
            </div>
            <div class="columna">
                <div class="fila">
                    <label class="negrita">Usuario: </label> {{ $user->name }}
                </div>
                <div class="fila">
                    <label class="negrita">Email: </label>{{ $user->email }}
                </div>
                <div class="fila">
                    <label class="negrita">Número de monedas disponibles: </label>{{ $user->coin }}
                </div>
                <div class="fila">
                    @php($fechaInicio=date("d/m/Y H:i:s", strtotime($user->created_at)))
                    <label class="negrita">Fecha de creación: </label>{{ $fechaInicio }}
                </div>
                <div class="fila">
                    @php($fechaUltima=date("d/m/Y H:i:s", strtotime($user->updated_at)))
                     <label class="negrita">Último inicio de sesión: </label>{{ $fechaUltima }}
                </div>


            </div>
        </div>
    </div>
</div>
@endsection