@extends( 'layouts.navbar' )

@section( 'title', 'Cambiar cromos' )

@section( 'content' )
    <div class="wrapper">
        <div class="form">
            <div class="form-details">
                <form action="{{ route( 'repes.cambioFinal' ) }}" method="POST">
                    @csrf
                    <select name="ofrecido">
                        @foreach( $ofrecidos as $cromo )
                            <option value={{$cromo->id}}>{{ $cromo->name }}</option>
                        @endforeach
                    </select>
    
                    <select name="pedido">
                        @foreach( $pedidos as $cromo )
                            <option value={{$cromo->id}}>{{ $cromo->name }}</option>
                        @endforeach
                    </select>
    
                    <button class="custom-button">Cambiar</button>
                </form>
            </div>
        </div>
    </div>
@endsection