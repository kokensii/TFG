@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Login usuario</h1>
                </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Introduce tu email">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Introduce tu contraseña">
                    </div>
                    <button class="btn btn-primary btn-block">Acceder</button>
                </form>
            </div>
        </div>
    </div>
@endsection