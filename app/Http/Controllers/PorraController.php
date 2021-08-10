<?php

namespace App\Http\Controllers;

use App\Models\BetRound;
use Illuminate\Http\Request;
use App\Models\Round;
use App\Models\Team;

class PorraController extends Controller
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
        $round = BetRound::create($request->all());
        
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
        $rounds = BetRound::all();
        return view('creacion_contenido.show_jornadas', compact('rounds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BetRound $round)
    {
        return view('creacion_contenido.edit_jornada', compact('round'));
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
        $round->update($request->all());

        return redirect()->route('round.create');
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

    public function porra()
    {
        //return redirect()->route('round.showAll');
        $rounds = BetRound::all();
        $teams = Team::all();
        return view('interaccion_usuarios.play_porra', compact('rounds','teams'));

    }


}
