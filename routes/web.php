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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::post('/api/usuario/login', 'UsuarioController@login');
Route::post('/api/usuario/cadastro', 'UsuarioController@store');
Route::get('/api/usuario/logout/{cpfcnpj}', 'UsuarioController@logout');

//com cliente externo
Route::post('{teste}/api/usuario/login', 'UsuarioController@login');
Route::post('{teste}/api/usuario/cadastro', 'UsuarioController@store');
Route::get('{teste}/api/usuario/logout/{cpfcnpj}', 'UsuarioController@logout');

