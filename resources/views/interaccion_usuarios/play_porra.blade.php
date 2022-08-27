@extends('layouts.navbar')

@section('title', 'Porra')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="title">Porra de la jornada {{ $betRound->id_jornada }}</div>
            <form action="{{route('bet.store')}}" method="POST">
                @csrf
                <div class="form-details">
                    <div class="input-box">
                        <span class="details">{{ $local[1] }} vs {{ $away[1] }}</span>
                        <select name="resultado">
                            <option value="1">1</option>
                            <option value="X">X</option>
                            <option value="2">2</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">{{ $local[0] }} vs {{ $away[0] }}</span>
                        <select name="resultado2">
                            <option value="1">1</option>
                            <option value="X">X</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="button" style="margin-top: 25%">
                    <input type="submit" value="Añadir resultados">
                </div>
            </form>
        </div>
    </div>
@endsection