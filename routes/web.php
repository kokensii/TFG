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

//// Equipo \\\\

Route::get('team/create', 'App\Http\Controllers\TeamController@create')->name('team.create');

Route::post('team/store', 'App\Http\Controllers\TeamController@store')->name('team.store');

Route::get('team/{team}/edit', 'App\Http\Controllers\TeamController@edit')->name('team.edit');

Route::put('team/{team}', 'App\Http\Controllers\TeamController@update')->name('team.update');

Route::delete('team/{team}', 'App\Http\Controllers\TeamController@destroy')->name('team.destroy');

Route::get('team/showAll', 'App\Http\Controllers\TeamController@showAll')->name('team.showAll');

//// Cromo \\\\

Route::get('cromo/create', 'App\Http\Controllers\CromoController@create')->name('cromo.create');

Route::post('cromo/store', 'App\Http\Controllers\CromoController@store')->name('cromo.store');

Route::get('cromo/{cromo}/edit', 'App\Http\Controllers\CromoController@edit')->name('cromo.edit');

Route::put('cromo/{cromo}', 'App\Http\Controllers\CromoController@update')->name('cromo.update');

Route::delete('cromo/{cromo}', 'App\Http\Controllers\CromoController@destroy')->name('cromo.destroy');

Route::get('cromo/showAll', 'App\Http\Controllers\CromoController@showAll')->name('cromo.showAll');

//// Cuestiones \\\\

Route::get('question/create', 'App\Http\Controllers\QuestionController@create')->name('question.create');

Route::post('question/store', 'App\Http\Controllers\QuestionController@store')->name('question.store');

Route::get('question/{question}/edit', 'App\Http\Controllers\QuestionController@edit')->name('question.edit');

Route::put('question/{question}', 'App\Http\Controllers\QuestionController@update')->name('question.update');

Route::delete('question/{question}', 'App\Http\Controllers\QuestionController@destroy')->name('question.destroy');

Route::get('question/showAll', 'App\Http\Controllers\QuestionController@showAll')->name('question.showAll');

//// Jornadas \\\\

Route::get('jornada/create', 'App\Http\Controllers\JornadaController@create')->name('jornada.create');

Route::post('jornada/store', 'App\Http\Controllers\JornadaController@store')->name('jornada.store');

Route::get('jornada/{jornada}/edit', 'App\Http\Controllers\JornadaController@edit')->name('jornada.edit');

Route::put('jornada/{jornada}', 'App\Http\Controllers\JornadaController@update')->name('jornada.update');

Route::delete('jornada/{jornada}', 'App\Http\Controllers\JornadaController@destroy')->name('jornada.destroy');

Route::get('jornada/showAll', 'App\Http\Controllers\JornadaController@showAll')->name('jornada.showAll');

// MÓDULO INTERACCION USUARIO \\

//// Cuestiones \\\\

Route::get('question/answer', 'App\Http\Controllers\QuestionController@answer')->name('question.answer');

//// Jornadas \\\\

Route::get('jornada/porra', 'App\Http\Controllers\JornadaController@porra')->name('jornada.porra');
