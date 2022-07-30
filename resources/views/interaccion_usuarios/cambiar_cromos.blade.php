@extends( 'layouts.navbar' )

@section( 'title', 'Cambiar cromos' )

@section( 'content' )
    <div class="wrapper">
        <div class="cambiar">
            <form action="" method="POST" style="width: 100%">
                @csrf
                <select name="repetidos">
                    @for( $i = 0; $i < count($repetidos); $i++ )
                        <option value={{ $repetidos[$i]->id }}>{{ $nombres[$i] }}</option>
                    @endfor
                </select>
            </form>
        </div>
    </div>
@endsection