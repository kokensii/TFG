@extends('layouts.plantilla')

@section('title', 'Listado cuestiones')

@section('content')
    <div class="wrapper">
        <div class="form-listado">
            @foreach($questions as $question)
                <div class="form-all">
                    <li>{{ $question->question }}</li>
                    <form action="{{ route('question.destroy', $question) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="{{ route('question.edit', $question) }}" method="GET">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection