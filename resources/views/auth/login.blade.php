@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')
    <div class="form">
        <div class="title">Login</div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-details">
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="text" id="email" name="email" value="{{ old('name') }}" required>
                </div>

                @error('email')
                    <br>
                    <small>*{{$mesagge}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" id="password" name="password" required>
                </div>

                @error('password')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="input-box">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
@endsection
