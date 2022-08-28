<?php

namespace App\Http\Controllers;

use App\Models\BetRound;
use Illuminate\Http\Request;
use App\Models\Round;
use App\Models\Team;
use App\Models\BetRoundUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BetRoundUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $allBets = BetRound::all();
        $lastBet = $allBets->last();

        $bet = new BetRoundUser;
        $bet->id_round = $lastBet->id;
        $bet->id_user = Auth::user()->id;
        $bet->result_user_1 = $request['resultado'];
        $bet->result_user_2 = $request['resultado2'];
        $bet->end = true;
        $bet->save();
        
        return view('users.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BetRound $round)
    {
       // return view('creacion_contenido.edit_jornada', compact('round'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Round $round)
    {
       // $round->update($request->all());

       // return redirect()->route('round.porra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Round $round)
    {
        $round->delete();

        return redirect()->route('round.showAll');
    }

    public function play()
    {
        $rounds = BetRound::all();
        $teams = Team::all();
        $porraUser = BetRoundUser::all();
        $numPartidos = BetRoundUser::count();
        return view('interaccion_usuarios.play_porra', compact('rounds','teams','porraUser','numPartidos'));

    }

    public function addCoins(BetRoundUser $betRoundUser, BetRound $betRound)
    {
        $user = User::find(Auth::user()->id);

        if($betRound->result == $betRoundUser->result_user_1 && $betRound->result_2 == $betRoundUser->result_user_2){
            $user->coin += 100;
            $acierto = true;
            $user->save();
        }else $acierto = false;

        return $acierto;
    }

    public function isBetDone()
    {
        // Última porra subida
        $betRound = BetRound::all()->last();
        // Apuesta del usuario en la última porra
        $betRoundUser = BetRoundUser::where('id_user', Auth::user()->id)->where('id_round', $betRound->id)->get();
        // Todos los equipos
        $teams = Team::all();

        $local = array();
        $away = array();

        foreach ( $teams as $team ) {
            if ( $team->id == $betRound->id_home_team || $team->id == $betRound->id_home_team_2 ) {
                array_push( $local, $team->name );
            } else if ( $team->id == $betRound->id_away_team || $team->id == $betRound->id_away_team_2 ) {
                array_push( $away, $team->name );
            }
        }

        if ( empty($betRound) ) {
            Alert::info('Atento', 'No hay ninguna porra en juego')->autoclose(3500);
            return view('users.index');
        } else {
            if ( count($betRoundUser) > 0 ) {
                if ( $betRoundUser[0]->end ) {
                    if ( !$betRound->end ) {
                        Alert::info('Atento', 'Ya has hecho la porra de la semana')->autoclose(3500);
                        return view('users.index');
                    } else {
                        if ( !$betRound->done ) {
                            $acierto = $this->addCoins($betRoundUser[0], $betRound);
                            $betRound->save();

                            if ( $acierto ) {
                                Alert::success('Enhorabuena!', 'Has ganado la porra de la semana');
                                return redirect()->route('user.index');
                            } else {
                                Alert::error('Lo siento...', 'No has acertado la porra de la semana');
                            }
                        } else {
                            Alert::info('Porra finalizada', 'Estamos haciendo la porra de la semana siguiente');
                        }
                        return view('users.index');
                    }
                } else {
                    if ( $betRound->end ) {
                        Alert::info('Atento', 'El tiempo de hacer la porra de esta semana finalizó')->autoclose(3500);
                        return view('users.index');
                    }
                    return view('interaccion_usuarios.play_porra', compact('betRound', 'teams'));
                }
            } else {
                return view('interaccion_usuarios.play_porra', compact('betRound', 'teams', 'local', 'away'));
            }
        }
        
    }

    public function porra(Request $request, BetRound $betRound)
    {
        $betRoundUser = $this->store($request);
    }
}
