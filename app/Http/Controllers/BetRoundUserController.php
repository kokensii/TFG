<?php

namespace App\Http\Controllers;

use App\Models\BetRound;
use Illuminate\Http\Request;
use App\Models\Round;
use App\Models\Team;
use App\Models\BetRoundUser;
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
        $round = BetRoundUser::create($request->all());
        
        return redirect()->route('index');
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

    public function isBetDone()
    {
        $bets = BetRoundUser::all();
        $lastBet = $bets->last();

        if(!empty($lastBet)){
            if($lastBet->end){
                Alert::info('Atento', 'Ya has hecho la porra de la semana')->autoclose(3500);
                return view('users.index');
            }
        }

        return view('interaccion_usuarios.play_porra');
    }
}
