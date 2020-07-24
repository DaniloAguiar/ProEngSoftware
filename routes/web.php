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
    return view('layout.index');
})->name('home');

Route::get('cliente', 'ClienteController@showAll')->name('clienteShowAll');
Route::get('cliente/cadastro/{id?}', 'ClienteController@show')->name('clienteShow');
Route::post('cliente',  'ClienteController@add')->name('clienteAdd');
Route::put('cliente',  'ClienteController@update')->name('clienteUpdate');
Route::delete('cliente',  'ClienteController@deletar')->name('clienteDeletar');

Route::get('pet', 'PetController@showAll')->name('petShowAll');
Route::get('pet/cadastro/{id?}', 'PetController@show')->name('petShow');
Route::post('pet',  'PetController@add')->name('petAdd');
Route::put('pet',  'PetController@update')->name('petUpdate');
Route::delete('pet',  'PetController@deletar')->name('petDeletar');

Route::get('atendimento', 'AtendimentoController@showAll')->name('atendimentoShowAll');
Route::get('atendimento/cadastro/{id?}', 'AtendimentoController@show')->name('atendimentoShow');
Route::post('atendimento',  'AtendimentoController@add')->name('atendimentoAdd');
Route::put('atendimento',  'AtendimentoController@update')->name('atendimentoUpdate');
Route::delete('atendimento',  'AtendimentoController@deletar')->name('atendimentoDeletar');

Route::get('fornecedor', 'FornecedorController@showAll')->name('fornecedorShowAll');
Route::get('fornecedor/cadastro/{id?}', 'FornecedorController@show')->name('fornecedorShow');
Route::post('fornecedor',  'FornecedorController@add')->name('fornecedorAdd');
Route::put('fornecedor',  'FornecedorController@update')->name('fornecedorUpdate');
Route::delete('fornecedor',  'FornecedorController@deletar')->name('fornecedorDeletar');

Route::get('produto', 'ProdutoController@showAll')->name('produtoShowAll');
Route::get('produto/cadastro/{id?}', 'ProdutoController@show')->name('produtoShow');
Route::post('produto',  'ProdutoController@add')->name('produtoAdd');
Route::put('produto',  'ProdutoController@update')->name('produtoUpdate');
Route::delete('produto',  'ProdutoController@deletar')->name('produtoDeletar');

