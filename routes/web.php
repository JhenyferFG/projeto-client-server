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
    return view('welcome');
});

Route::get('/api/usuario/teste', function () {
    return view('login');
});
Route::post('/api/usuario/login', 'UsuarioController@login');
Route::post('/api/usuario/cadastro', 'UsuarioController@store');
Route::post('/api/usuario/logout', 'UsuarioController@logout');

