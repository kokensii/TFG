@extends('layouts.plantilla')

@section('title', 'Register')

@section('content')
    <div class="form">
        <div class="title">Register</div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-details">
                <div class="input-box">
                    <span class="details">Nick</span>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                @error('name')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                @error('email')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" id="password" name="password" required>
                </div>

                @error('password')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                @error('password_confirmation')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
@endsection