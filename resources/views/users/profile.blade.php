@extends('layouts.navbar')

@section('content')
    {{ $user->email }}
    {{ $user->name }}
@endsection