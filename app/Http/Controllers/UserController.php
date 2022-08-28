<?php

namespace App\Http\Controllers;

use App\Models\Cambio;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cambios = Cambio::where('id_user', Auth::user()->id)->get();

        $ofrecidos = array();
        $recibidos = array();

        foreach ( $cambios as $cambio ) {
            array_push( $ofrecidos, $cambio->doy );
            array_push( $recibidos, $cambio->recibo );
        }

        if ( count( $ofrecidos ) > 0 ) {
            $mensaje = "has dado a ";
            $mensaje2 = "y has recibido a ";
            for ( $i = 0; $i < count($ofrecidos); $i++ ) {
                $mensaje .= $ofrecidos[$i] . " ";
                $mensaje2 .= $recibidos[$i] . " ";
            }

            Alert::success("Se ha producido un cambio", $mensaje . $mensaje2);

            Cambio::where('id_user', Auth::user()->id)->delete();
        }
        
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('index');
    }

    public function viewLogin(){
        return view('users.login');
    }

    public function profile(User $user){
        return view('users.profile', compact('user'));
    }
}
