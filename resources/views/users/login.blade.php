@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
           <h1 class="panel-title">Login usuario</h1>
        </div>
        <div class="panel-body">
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Introduce tu email">
                </div>
            </form>
        </div>
    </div>
@endsection