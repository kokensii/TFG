@extends('layouts.navbar')

@section('title', 'Comprar cromos')

@section('content')
    <div class="wrapper">
        <div class="comprar">
            <div class="sobres">
                <form action="{{ route('card.comprar', $numCromos1) }}" method="POST" style="width: 100%">
                    @csrf
                    <div class="sobre">
                        <div class="sobre__forma" style="background-color: #e07f1f;">
                            <div class="sobre__frase" style="color: #a46628;">
                                <h2 style="text-align: center;">1</h2>
                                <h2>Cromo</h2>
                            </div>
                        </div>

                        <div class="sobre__precio">
                            <i class='bx bx-coin-stack' style="color: #e9d30c"></i>20
                        </div>

                        <button class="custom-button">Comprar</button>
                    </div>
                </form>

                <form action="{{ route('card.comprar', $numCromos3) }}" method="POST" style="width: 100%">
                    @csrf
                    <div class="sobre">
                        <div class="sobre__forma" style="background-color: #bfc1c1;">
                            <div class="sobre__frase" style="color: #989b9b;">
                                <h2 style="text-align: center;">3</h2>
                                <h2>Cromos</h2>
                            </div>
                        </div>

                        <div class="sobre__precio">
                            <i class='bx bx-coin-stack' style="color: #e9d30c"></i>50
                        </div>

                        <button class="custom-button">Comprar</button>
                    </div>
                </form>

                <form action="{{ route('card.comprar', $numCromos5) }}" method="POST" style="width: 100%">
                    @csrf
                    <div class="sobre">
                        <div class="sobre__forma" style="background-color: #d5ac5b;">
                            <div class="sobre__frase" style="color: #b38c40">
                                <h2 style="text-align: center;">5</h2>
                                <h2>Cromos</h2>
                            </div>
                        </div>

                        <div class="sobre__precio">
                            <i class='bx bx-coin-stack' style="color: #e9d30c"></i>75
                        </div>

                        {{-- <input type="submit" value="Comprar"> --}}
                        <button class="custom-button">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection