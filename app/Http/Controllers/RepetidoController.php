<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Team;
use App\Models\Player;
use App\Models\Repetido;
use App\Models\User;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Cast\Object_;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\Exists;

class RepetidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repetidos = Repetido::get();
        $players = Player::get();
        $jugadores = array();

        $repetidosAgrupados = collect();


        foreach($repetidos as $repetido) {
            if($repetido->id_user == Auth::user()->id) {
                array_push($jugadores, $players[$repetido->id_player-1]);
            }
        }

        foreach ($players as $player) {
            $repetidosAgrupados = $repetidosAgrupados->push((object)['id_player' => $player->id, 'contador' => Repetido::where('id_player', $player->id)->count()]);
        }

        return view('interaccion_usuarios.repetidos', compact('jugadores','repetidosAgrupados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Devuelve los cromos repetidos del usuario
    public function repetidosUsuario() {
        $repetidos = Repetido::get();
        $repes = array();

        foreach ( $repetidos as $repetido ) {
            if ( $repetido->id_user == Auth::user()->id ) {
                array_push($repes, $repetido);
            }
        }

        return $repes;
    }

    public function cambiarCromos() {
        $repetidos = $this->repetidosUsuario();
        $players = Player::get();
        $nombres = array();

        foreach( $repetidos as $repetido ) {
            array_push( $nombres, $players[ $repetido->id_player-1 ]->nombre );
        }
        return view( 'interaccion_usuarios.cambiar_cromos', compact( 'repetidos', 'nombres' ));
    }

    public function repesYUsers() {
        // Array que contiene los cromos repetidos por orden segun el id_user
        $repetidos = Repetido::orderBy('id_user')->get();

        // Array que contiene los usuarios que tienen cromos
        $users = collect();
        
        $repes = collect();

        $idUsers = Repetido::select('id_user')->get();
        $players = Player::all();
        $id = 'x';

        foreach( $repetidos as $repetido ) {
            $nombre = $players[$repetido->id_player-1]->nombre;
            $repes = $repes->push((object)['id' => $repetido->id_user, 'nombre' => $nombre]);
        }

        foreach( $idUsers as $idUser ) {
            if ( $idUser != $id ) {
                $nombre = User::select('name')->where('id', $idUser->id_user)->get();
                $users = $users->push((object)['id' => $idUser->id_user, 'nombre' => $nombre[0]->name]);
                $id = $idUser;
            }
        }

        $actual_user_id = Auth::user()->id;
        
        return view( 'interaccion_usuarios.cambiar_repes', compact( 'repes', 'users', 'actual_user_id' ));
    }

    public function cambiarRepes( $idUser ) {
        // Todos los jugadores (cromos)
        $players = Player::all();

        // Los cromos repetidos del usuario
        $repesCambia = Repetido::where('id_user', $idUser)->get();
        $repes = Repetido::where('id_user', Auth::user()->id)->get();

        $buscadosCambia = array();
        $buscados = array();

        $ofrecer = array();
        $ofrecerCambia = array();

        foreach ( $players as $player ) {
            $i = Card::where('id_player', $player->id)->where( 'id_user', $idUser )->count();
            if ( $i == 0 ) array_push( $buscadosCambia, $player );
        }

        foreach ( $players as $player ) {
            $j = Card::where( 'id_player', $player->id )->where( 'id_user', Auth::user()->id )->count();
            if ( $j == 0 ) array_push( $buscados, $player );
        }

        for ( $i = 0; $i < count($buscadosCambia); ++$i ){
            $encontrado = false;
            $j = 0;
            while ( $j < count($repes) && $encontrado == false ) {
                if ( $repes[$j]->id_player == $buscadosCambia[$i]->id ) {
                    $encontrado = true;
                    array_push( $ofrecer, $repes[$j]);
                }
                $j++;
            }
        }

        for ( $i = 0; $i < count($buscados); ++$i ){
            $encontrado = false;
            $j = 0;
            while ( $j < count($repesCambia) && $encontrado == false ) {
                if ( $repesCambia[$j]->id_player == $buscados[$i]->id ) {
                    $encontrado = true;
                    array_push( $ofrecerCambia, $repesCambia[$j]);
                }
                $j++;
            }
        }

        // Cromos que ofrece el usuario actual
        $ofrecidos = collect();
        // Cromos que repetidos del otro usuario que son buscados por el usuario actual
        $pedidos = collect();

        if ( count($ofrecer) > 0 && count($ofrecerCambia) > 0 ) {
            for ( $i = 0; $i < count( $players ); $i++ ) {
                $j = 0;
                $encontrado = false;

                while ( $j < count( $ofrecer ) && !$encontrado ) {
                    if ( $players[$i]->id == $ofrecer[$j]->id_player ) {
                        $ofrecidos = $ofrecidos->push((object)['id' => $ofrecer[$j]->id, 'id_player' => $ofrecer[$j]->id_player, 'id_user' => $ofrecer[$j]->id_user, 'name' => $players[$i]->nombre]);
                        $encontrado = true;
                    }
                    $j++;
                }
            }

            for ( $i = 0; $i < count( $players ); $i++ ) {
                $j = 0;
                $encontrado = false;

                while ( $j < count( $ofrecerCambia ) && !$encontrado ) {
                    if ( $players[$i]->id == $ofrecerCambia[$j]->id_player ) {
                        $pedidos = $pedidos->push((object)['id' => $ofrecerCambia[$j]->id, 'id_player' => $ofrecerCambia[$j]->id_player, 'id_user' => $ofrecerCambia[$j]->id_user, 'name' => $players[$i]->nombre]);
                        $encontrado = true;
                    }
                    $j++;
                }
            }
            return view( 'interaccion_usuarios.cambiar_final', compact('ofrecidos', 'pedidos') );
        } else {
            Alert::error('Lo siento...', 'No se puede realizar el cambio');
            return redirect( 'users/index' );
        }
    }

    public function cambioFinal ( Request $request ) {
        // $ofrecido = cromo que ofrece el user
        // $pedido = cromo que pide el user ha cambio del suyo
        /* $bet = new BetRoundUser;
        $bet->id_round = $lastBet->id;
        $bet->result_user_1 = $request['resultado'];
        $bet->result_user_2 = $request['resultado2'];
        $bet->end = true;
        $bet->save(); */
        //return "Hola";
        $ofrecido = Repetido::where('id', $request['ofrecido'])->get();
        $pedido = Repetido::where('id', $request['pedido'])->get();

        $cardUser = new Card;
        $cardOtherUser = new Card;

        $cardOtherUser->id = $ofrecido[0]->id;
        $cardOtherUser->id_user = $ofrecido[0]->id_user;
        $cardOtherUser->id_player = $ofrecido[0]->id_player;
        $cardOtherUser->save();

        $cardUser->id = $pedido[0]->id;
        $cardUser->id_user = $pedido[0]->id_user;
        $cardUser->id_player = $pedido[0]->id_player;
        $cardUser->save();

        Repetido::where('id', $ofrecido[0]->id)->delete(); 
        Repetido::where('id', $pedido[0]->id)->delete();

        return redirect( 'users/index' );
    }
}