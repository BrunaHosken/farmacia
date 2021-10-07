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

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/funcionario', function () {
    return view('funcionario');
});
Route::get('/opcaomedicamentos', function () {
    return view('opcaomedicamentos');
});

Route::get('/cadastro', function () {
    return view('novofuncionario');
});

Route::get('/funcionarioIndex', function () {
    return view('funcionarioIndex');
});
Route::get('/logonFuncionario', function () {
    return view('logonfuncionario');
});


Route::get('/cliente', 'ClienteController@index');
Route::get('/compra', 'CompraController@index');
Route::get('/medicamento', 'MedicamentoController@index');

Route::get('/novocliente', 'ClienteController@create');
Route::get('/salvacliente', 'ClienteController@salvacliente');


Route::get('/novomedicamento', 'MedicamentoController@create');
Route::get('/salvamedicamento', 'MedicamentoController@salvamedicamento');

Route::get('/alterar', 'MedicamentoController@altera');
Route::get('/alterarmedicamento', 'MedicamentoController@alterarmedicamento');

Route::get('/excluir', 'MedicamentoController@exclui');
Route::get('/excluirmedicamento', 'MedicamentoController@excluirmedicamento');


Route::get('/novofuncionario', 'UsuarioFuncionarioController@create');
Route::get('/salvafuncionario', 'UsuarioFuncionarioController@salvafuncionario');

Route::get('/login', 'AuthController@authenticate');

Route::get('/logout', 'AuthController@getSair');


