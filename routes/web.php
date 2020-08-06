<?php

use Illuminate\Support\Facades\Route;

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

/*
Modelo de Rota Padrão iniciada

Route::get('/', function () {
    return view('welcome');
});

*/

// Modelo de Rota por controller
Route::get('/', 'AgendaController@index');
