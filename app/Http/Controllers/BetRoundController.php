<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BetRound;
use App\Models\BetRoundUser;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BetRoundController extends Controller
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
        $teams = Team::get();
        return view('creacion_contenido.create_jornada', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BetRound::create($request->all());
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

    public function showAll()
    {
        $rounds = BetRound::all();
        return view('creacion_contenido.show_jornadas', compact('rounds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BetRound $betRound)
    {
        $teams = Team::get();
        return view('creacion_contenido.edit_jornada', compact('betRound', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BetRound $betRound)
    {
        $betRound->update($request->all());

        return redirect()->route('round.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BetRound $betRound)
    {
        $betRound->delete();
        return redirect()->route('round.showAll');
    }

    public function addCoins(BetRoundUser $bet, BetRound $betRound)
    {
        $user = User::find(Auth::user()->id);

        if($betRound->result == $bet->result_user_1 &&
           $betRound->result2 == $bet->result_user_2){
                   $user->coin += 100;
                   $acierto = true;
                   $user->save();
        }else $acierto = false;

        return $acierto;  
    }

    public function isBetDone(BetRound $betRound)
    {
        $bets = BetRoundUser::all();
        $bet = $bets->last();
        
        if($betRound->end){
            $acierto = $this->addCoins($bet, $betRound);

            if($acierto){
                Alert::success('Enhorabuena!', 'Has ganado la porra semanal')->autoclose(3500);
            }else Alert::error('Lo siento...', 'No has acertado la porra semanal')->autoclose(3500);

            return view('users.index');
        }
    }
}
