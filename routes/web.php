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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cliente/cadastro', 'ClienteController@telaCadastro');
Route::post('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente_add');

Route::get('/cliente/listar', 'ClienteController@listar')->name('listar');