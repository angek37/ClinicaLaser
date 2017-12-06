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
Route::get('panel',function () {
	return view('panel');
});

Route::resource('usuarios', 'UsuariosController');
Route::post('newUser', 'UsuariosController@insert');
Route::get('deleteUser/{usuario}',["uses" => 'UsuariosController@delete',"as" => 'deleteUser']);
Route::get('updateUser/{usuario}',["uses" => 'UsuariosController@update',"as" => 'updateUser']);
Route::post('updateUser/updateUserAction', 'UsuariosController@updateAction');
Route::post('signin','authentication@signin');
Route::get('logout','authentication@logout');