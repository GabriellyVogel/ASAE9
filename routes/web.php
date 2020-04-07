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
Route::get('/cliente/cadastro', 'ClienteController@telaCadastro')->name('cliente_cds');
Route::post('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente_add');

Route::get('/cliente/alterar/{id}', 'ClienteController@telaAteracao')->name('cliente_alt');
Route::post('/cliente/alterar/{id}', 'ClienteController@alterar')->name('cliente_upd');

Route::get('/cliente/excluir/{id}', 'ClienteController@excluir')->name('cliente_exc');

Route::get('/cliente/listar', 'ClienteController@listar')->name('listar');

Route::get('/venda/cadastro', 'VendaController@telaVenda')->name('venda_cds');
Route::post('/venda/adicionar', 'VendaController@adicionarVenda')->name('venda_add');

Route::get('/venda/listar', 'VendaController@listaVenda')->name('listarv');
