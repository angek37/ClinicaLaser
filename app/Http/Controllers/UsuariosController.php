<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Rol;

class UsuariosController extends Controller
{
    public function index()
    {
    	$roles = Rol::select('id', 'name')
    	-> get();
    	$usuarios = User::select('Usuario.name as usuario', 'Rol.name as rol')
    	-> join('Rol', 'Rol.id', '=', 'Usuario.rol')
    	-> get();
    	return view('usuarios', ['roles' => $roles], ['usuarios' => $usuarios]); 
    }

    public function insert(Request $request)
    {
    	$user = new User($request -> all());
    	$user -> rol = $request -> rol;

        $Verifica = User::find($request->name);
        if($Verifica != null){
            return Redirect::back()->with('error','Ese usuario ya ha sido registrado!');
        }else{
            $user -> save();
            return Redirect::back()->with('success','Usuario creado exitosamente!');
        }
    }

    public function delete($usuario)
    {
    	$userToDelete = DB::table('Usuario')->where('name', $usuario)->delete();
		return Redirect::back()->with('warning','Usuario eliminado exitosamente!');
    }

    public function update($usuario)
    {
    	$roles = Rol::select('id', 'name')
    	-> get();

    	$userToUpdate = DB::table('Usuario')->where('name', $usuario)->first();
    	return view('editUser', ['roles' => $roles], ['usuario' => $userToUpdate]);
    }

    public function updateAction(Request $request)
    {
    	$user = User::where('name', $request -> name)->first();
    	$user -> rol = $request -> rol;
    	$user -> save();
    	return Redirect::back()->with('success','Actualización exitosa!');
    }

}