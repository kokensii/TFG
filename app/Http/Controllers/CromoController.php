<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Team;
use App\Models\User;
use App\Models\Player;
use App\Models\Repetido;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use SplFixedArray;

class CromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $players = Player::get();
        $teams = Team::get();
        $jugadores = array();

        $cromos = $this->cromosUsuario();

        foreach ( $cromos as $cromo ) {
            array_push($jugadores, $players[$cromo->id_player-1]);
        }

        return view('interaccion_usuarios.cromos', compact('jugadores', 'teams','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::get();
        return view('creacion_contenido.create_cromo', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = Card::create($request->all());
        
        return redirect()->route('index');
    }

    public function isCromo($idPlayer, $cromos)
    {
        //$i = 0;
        $encontrado = false;

        /* while($i < count($cromos) && $encontrado) {
            if ($cromos->id_player == $idPlayer) $encontrado = true;
        } */

        foreach( $cromos as $cromo ) {
            if ( $cromo->id_player == $idPlayer ) $encontrado = true;
        }

        return $encontrado;
    }

    // Devuelve los cromos que pertenecen al usuario
    public function cromosUsuario() {
        $cards = Card::get();
        $cromos = array();

        foreach ( $cards as $card ) {
            if ( $card->id_user == Auth::user()->id ) {
                array_push($cromos, $card);
            }
        }

        return $cromos;
    }

    public function guardarCromos($numCromos)
    {
        // Usuario actual
        $user = User::find(Auth::user()->id);

        // Colocamos los precios a cada número de cromos
        if ($numCromos == 1) $precio = 20;
        elseif ($numCromos == 3) $precio = 50;
        else $precio = 75;

        if($user->coin > $precio){
            // Obtenemos todos los jugadores
            $players = Player::get();
            $jugadores = array();
            $randoms = array();

            // Quitamos las monedas correspondientes
            $user->coin -= $precio;
            $user->save();

            // Guardamos en el array "jugadores" los jugadores de forma aleatoria
            for ($i = 0; $i < $numCromos; $i++) {
                $encontrado = false;
                while ( !$encontrado ) {
                    $rand = rand(0, count($players) - 1);
                    $existe = false;

                    $j = 0;
                    while ( $j < count ( $randoms ) && !$existe ) {
                        if ( $rand == $randoms[$j] ) $existe = true;
                        $j++;
                    }

                    if ( !$existe ) {
                        $encontrado = true; 
                    }
                }
                array_push($randoms, $rand);
                array_push($jugadores, $players[$rand]); 
            }

            // Variable con los cromos del usuario
            $cromos = $this->cromosUsuario();
            $mesagge = '';

            foreach ($jugadores as $jugador ) {
                if($this->isCromo($jugador->id, $cromos) == false) {
                    $card = new Card;
                    $card->id = "$jugador->id" . rand(0, 10000) . rand(0,10000);
                    $card->id_player = $jugador->id;
                    $card->id_user = Auth::user()->id;
                    $card->save();
                }
                else{
                    $repetido = new Repetido;
                    $repetido->id = "$jugador->id" . rand(0, 10000) . rand(0,10000);
                    $repetido->id_player = $jugador->id;
                    $repetido->id_user = Auth::user()->id;
                    $repetido->save();
                }
                $mesagge = $mesagge . ' ' . $jugador->nombre;
            }

            $mesagge1 = 'Los cromos que te han tocado han sido:';

            /* return $user->coin;
            return $jugadores; */
            
            Alert::success($mesagge1, $mesagge);
            return redirect()->route('user.index');
        } else {
            Alert::error("Lo siento", "No tienes las monedas suficientes para comprar este sobre");
            return redirect()->route('card.vistaComprar');
        }
    }

    public function comprarCromos() {
        $numCromos1 = 1;
        $numCromos3 = 3;
        $numCromos5 = 5;
        return view('interaccion_usuarios.comprar_cromos', compact('numCromos1', 'numCromos3', 'numCromos5'));
    }

    public function vistaEquipo(){

        $teams = Team::get();
        //User::select('name')->where('id', $idUser->id_user)->get();
        $players = Card::orderBy('id_player')->where('id_user', Auth::user()->id)->get();
        $array_players = array();
        $numCards = array_fill(0, count($teams), 0);

        foreach ( $players as $player ) {
            array_push( $array_players, Player::where('id', $player->id_player)->get()[0] );
        }

        $j = 1;
        for ( $i = 0; $i < count($array_players); $i++ ) {
            if ( ($j) == $array_players[$i]->id_equipo ) {
                $numCards[$j-1]++;
            } else {
                $j = $array_players[$i]->id_equipo;
                $numCards[$j-1]++;
            }
        }

        $cardCounter = 4;

        return view('interaccion_usuarios.listado_equipos' , compact('teams', 'numCards', 'cardCounter'));
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

    public function showAll(){
        $cards = Card::all();
        return view('creacion_contenido.show_cromos', compact('cards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return view('creacion_contenido.edit_cromo', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $card->update($request->all());

        return redirect()->route('card.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();

        return redirect()->route('card.showAll');
    }
}
