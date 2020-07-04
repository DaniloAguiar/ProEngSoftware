<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
})->name('home');


Route::get('cadastro/cliente/{id?}', 'ClienteController@index')->name('showCadastroCliente');


Route::post('cadastro/cliente', function (Request $request) {
    dd($request);
})->name('adicionarCliente');

Route::put('cadastro/cliente', function () {
});

Route::delete('cadastro/cliente', function () {
});
