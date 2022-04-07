<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Team;
use App\Models\Player;
use App\Models\Repetido;
use Illuminate\Support\Facades\Auth;

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

        foreach($repetidos as $repetido) {
            if($repetido->id_user == Auth::user()->id) {
                array_push($jugadores, $players[$repetido->id_player-1]);
            }
        }

        return view('interaccion_usuarios.repetidos', compact('jugadores'));
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
}
