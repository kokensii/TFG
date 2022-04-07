@extends('layouts.plantilla')

@section('title', 'Comprar cromos')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            <form action="{{ route('card.comprar', $numCromos) }}" method="POST">
                @csrf
                <input type="submit" value="Comprar">
            </form>
        </div>
    </div>
@endsection