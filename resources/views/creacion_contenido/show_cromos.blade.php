@extends('layouts.listados')

@section('title', 'Listado cromos')

@section('content')
    <div class="wrapper">
        @foreach($cromos as $cromo)
            <li>{{$cromo->name}}</li>
        @endforeach
    </div>
@endsection