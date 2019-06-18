<?php

//use Illuminate\Routing\Route;
use App\Http\Controllers\Fazenda\FazendaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/fazendas', function () {
    $f = new FazendaController();
    $obj = array('dados' => $f->index());
    return view('fazenda.fazendas',$obj);
});

Route::get('/fazenda/{id}', 'Fazenda\FazendaController@showV');
Route::get('/dispositivos/{id}', 'Dispositivo\DispositivoController@index');
