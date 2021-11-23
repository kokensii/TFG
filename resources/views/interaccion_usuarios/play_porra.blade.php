@extends('layouts.plantilla')

@section('title', 'Porra')

@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="title">Porra semanal</div>
            <form action="{{ route('porra.store') }}" method="POST">
                @csrf
                <div class="form-details">
                    <div class="input-box">
                        <span class="details">Madrid vs Betis</span>
                        <select name="resultado" id="resultado">
                            <option value="1">1</option>
                            <option value="X">X</option>
                            <option value="2">2</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Barcelona vs Sevilla</span>
                        <select name="resultado2" id="resultado2">
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