@extends('layouts.plantilla')

@section('content')
    {{ $user->email }}
    {{ $user->name }}
@endsection