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


Route::resource('/', 'CitaController');

Route::resource('panel', 'panelController', ['middleware' => 'LoginM']);

Route::resource('usuarios', 'UsuariosController', ['middleware' => 'LoginM']);
Route::post('newUser', 'UsuariosController@insert');
Route::get('deleteUser/{usuario}',["uses" => 'UsuariosController@delete',"as" => 'deleteUser']);
Route::get('updateUser/{usuario}',["uses" => 'UsuariosController@update',"as" => 'updateUser']);
Route::post('updateUser/updateUserAction', 'UsuariosController@updateAction');

Route::resource('medicos', 'MedicosController', ['middleware' => 'LoginM']);
Route::post('nuevoMedico', 'MedicosController@insert');
Route::get('deleteMedico/{medico}',["uses" => 'MedicosController@delete',"as" => 'deleteMedico']);
Route::get('updateMedico/{medico}',["uses" => 'MedicosController@update',"as" => 'updateMedico']);
Route::post('updateMedico/updateMedicoAction', 'MedicosController@updateAction');

Route::resource('pacientes', 'PacientesController', ['middleware' => 'LoginM']);
Route::post('nuevoPaciente', 'PacientesController@insert');
Route::get('deletePaciente/{paciente}',["uses" => 'PacientesController@delete',"as" => 'deletePaciente']);
Route::get('updatePaciente/{paciente}',["uses" => 'PacientesController@update',"as" => 'updatePaciente']);
Route::post('updatePaciente/updatePacienteAction', 'PacientesController@updateAction');
Route::get('historyPaciente/{paciente}',["uses" => 'PacientesController@history',"as" => 'historyPaciente']);

Route::post('nuevaCita', 'CitaController@insert');
Route::resource('citas', 'CitaRedirect', ['middleware' => 'LoginM']);
Route::get('cancelCita/{cita}',["uses" => 'CitaController@cancel',"as" => 'cancelCita']);
Route::get('completeCita/{paciente}',["uses" => 'CitaController@complete',"as" => 'completeCita']);
Route::post('completeCita/completeCitaAction', 'CitaController@updateAction');

Route::post('signin','authentication@signin');
Route::get('logout','authentication@logout');