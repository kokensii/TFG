@extends( 'layouts.navbar' )

@section( 'title', 'Cambiar cromos' )

@section( 'content' )
    <div class="wrapper">
        <div class="sobres">
            @foreach ( $users as $user )
                <form action="{{ route( 'repes.cambiar', $user->id ) }}" method="POST">
                    @csrf
                    <div class="sobre">
                        <h4>{{ $user->nombre }}</h4>
                        @foreach( $repes->where('id', $user->id) as $repe )
                            {{ $repe->nombre }}
                        @endforeach
                        <button class="custom-button">Cambiar</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection