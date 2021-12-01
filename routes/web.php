<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route as Route;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    return view('welcome');
});

// USUARIOS \\

Route::get('user/create', 'App\Http\Controllers\UserController@create')->name('user.create');

Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');

Route::get('user/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('user.edit');

Route::put('/user/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');

Route::delete('user/{user}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/admin', 'App\Http\Controllers\AdminController@admin')->middleware('is_admin')->name('admin');

Route::get('/home/profile/{user}', 'App\Http\Controllers\UserController@profile')->name('profile');

Route::get('/users/index', 'App\Http\Controllers\UserController@index')->name('user.index');

// MÓDULO CREACIÓN DE CONTENIDO \\

//// Team \\\\

Route::get('team/create', 'App\Http\Controllers\TeamController@create')->name('team.create');

Route::post('team/store', 'App\Http\Controllers\TeamController@store')->name('team.store');

Route::get('team/{team}/edit', 'App\Http\Controllers\TeamController@edit')->name('team.edit');

Route::put('team/{team}', 'App\Http\Controllers\TeamController@update')->name('team.update');

Route::delete('team/{team}', 'App\Http\Controllers\TeamController@destroy')->name('team.destroy');

Route::get('team/showAll', 'App\Http\Controllers\TeamController@showAll')->name('team.showAll');

//// Card \\\\

Route::get('card/create', 'App\Http\Controllers\CromoController@create')->name('card.create');

Route::post('card/store', 'App\Http\Controllers\CromoController@store')->name('card.store');

Route::get('card/{card}/edit', 'App\Http\Controllers\CromoController@edit')->name('card.edit');

Route::put('card/{card}', 'App\Http\Controllers\CromoController@update')->name('card.update');

Route::delete('card/{card}', 'App\Http\Controllers\CromoController@destroy')->name('card.destroy');

Route::get('card/showAll', 'App\Http\Controllers\CromoController@showAll')->name('card.showAll');

//// Cuestiones \\\\

Route::get('question/create', 'App\Http\Controllers\QuestionController@create')->name('question.create');

Route::post('question/store', 'App\Http\Controllers\QuestionController@store')->name('question.store');

Route::get('question/{question}/edit', 'App\Http\Controllers\QuestionController@edit')->name('question.edit');

Route::put('question/{question}', 'App\Http\Controllers\QuestionController@update')->name('question.update');

Route::delete('question/{question}', 'App\Http\Controllers\QuestionController@destroy')->name('question.destroy');

Route::get('question/showAll', 'App\Http\Controllers\QuestionController@showAll')->name('question.showAll');

//// Jornadas \\\\

Route::get('round/create', 'App\Http\Controllers\JornadaController@create')->name('round.create');

Route::post('round/store', 'App\Http\Controllers\BetRoundController@store')->name('round.store');

Route::get('round/{betRound}/edit', 'App\Http\Controllers\BetRoundController@edit')->name('round.edit');

Route::put('round/{betRound}', 'App\Http\Controllers\BetRoundController@update')->name('round.update');

Route::delete('round/{betRound}', 'App\Http\Controllers\JornadaController@destroy')->name('round.destroy');

Route::get('round/showAll', 'App\Http\Controllers\BetRoundController@showAll')->name('round.showAll');

// MÓDULO INTERACCION USUARIO \\

//// Cuestiones \\\\

Route::get('questionUser/answer', 'App\Http\Controllers\QuestionController@answer')->name('questionUser.answer');

Route::post('questionUser/{question}', 'App\Http\Controllers\QuestionController@isCorrect')->name('questionUser.isCorrect');

//// Jornadas \\\\

//Route::get('round/porra', 'App\Http\Controllers\JornadaController@porra')->name('round.porra');

Route::get('round/porra', 'App\Http\Controllers\PorraController@porra')->name('round.porra');


/* Añadir los controladores de los nuevos modelos y las rutas */

//Prueba
Route::post('porra/store', 'App\Http\Controllers\BetRoundUserController@store')->name('porra.store');

Route::get('porra/play', 'App\Http\Controllers\BetRoundUserController@play')->name('porra.play');