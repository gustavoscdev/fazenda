<?php

//use Illuminate\Routing\Route;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fazendas','Fazenda\FazendaController@index');
Route::get('/fazenda/{id}', 'Fazenda\FazendaController@showV');
Route::get('/dispositivos/{id}', 'Dispositivo\DispositivoController@index');
Route::get('/dispositivo/{id}', 'Dispositivo\DispositivoController@show');
Route::get('/procurar', 'Animal\AnimalController@procurar');
Route::post('/animal', 'Animal\AnimalController@salvar');
Route::get('/animal', 'Animal\AnimalController@index');
Route::get('/animal/{id}', 'Animal\AnimalController@show');
Route::get('/login','Controller@FazerLogin');
