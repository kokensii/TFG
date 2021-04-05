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

Route::get('user/create', 'UserController@create')->name('user.create');

Route::post('/user/store', 'UserController@store')->name('user.store');

Route::get('user/{user}/edit', 'UserController@edit')->name('user.edit');

Route::put('/user/{user}', 'UserController@update')->name('user.update');

Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');

Route::get('/home/profile/{user}', 'UserController@profile')->name('profile');

// MÓDULO CREACIÓN DE CONTENIDO \\

//// Equipo \\\\

Route::get('team/create', 'TeamController@create')->name('team.create');

Route::post('team/store', 'TeamController@store')->name('team.store');

Route::get('team/{team}/edit', 'TeamController@edit')->name('team.edit');

Route::put('team/{team}', 'TeamController@update')->name('team.update');

//// Cromo \\\\

Route::get('cromo/create', 'CromoController@create')->name('cromo.create');

Route::post('cromo/store', 'CromoController@store')->name('cromo.store');

Route::get('cromo/{cromo}/edit', 'CromoController@edit')->name('cromo.edit');

Route::put('cromo/{cromo}', 'CromoController@update')->name('cromo.update');

//// Cuestiones \\\\

Route::get('question/create', 'QuestionController@create')->name('question.create');

Route::post('question/store', 'QuestionController@store')->name('question.store');

Route::get('question/{question}/edit', 'QuestionController@edit')->name('question.edit');

Route::put('question/{question}', 'QuestionController@update')->name('question.update');