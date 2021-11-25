<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class QuestionController extends Controller
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
        return view('creacion_contenido.create_question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Question::create($request->all());
        
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
        $questions = Question::all();
        return view('creacion_contenido.show_questions', compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('creacion_contenido.edit_question', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->all());

        return redirect()->route('question.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('question.showAll');
    }

    //Hecho desde hoy.

    public function answer()
    {
        $questions = Question::first();
        $questionAll = Question::all();

        /*
        if($questions->finalizado){
            $next = Question::where('id', '>', $question->id)
                    ->orderBy('id', 'asc')
                    ->first();
            for($i = 0; $i < $questionAll.lenght() && $next.finalizado; $i++){
                $next = Question::where('id', '>', $question->id)
                    ->orderBy('id', 'asc')
                    ->first();
            }
            $questions = $next;
        }
        */

        /* Hacer un recorrido hasta encontrar el primero que no
           este con finalizado = true*/
        return view('interaccion_usuarios.answer_question', compact('questions'));
    }

    public function isCorrect(Request $request, Question $question)
    {
        $user = User::find(Auth::user()->id);
        
        $userAnswer = new UserAnswer;
        $userAnswer->id_question = $question->id;
        $userAnswer->answer = $request['respuesta'];
        $userAnswer->id_user = Auth::user()->id;
        $userAnswer->save();

        return $userAnswer;

        if($request['respuesta'] == $question->correct_answer){
            $user->coin += 50;
            $acierto = true;
        }
        else $acierto = false;

        $user->save();

        $next = Question::where('id', '>', $question->id)
                    ->orderBy('id', 'asc')
                    ->first();

        $questions = $next;

        if($acierto){
            Alert::success('Enhorabuena!', 'Tu respuesta ha sido correcta')->autoclose(3500);
        }else Alert::error('Lo siento...', 'La respuesta ha sido incorrecta')->autoclose(3500);

        if($next != null) return view('interaccion_usuarios.answer_question', compact('questions'));

        /*return redirect()->route('questionUser.answer', $question);*/
        
    }
}
