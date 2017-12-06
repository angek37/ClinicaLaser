<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Paciente;
use App\Medico;
use App\Telefono;

class PacientesController extends Controller
{
    public function index()
    {
    	$pacientes = Paciente::select('paciente.id', 'paciente.first_name', 'paciente.last_name', 'medico.first_name as medNom', 'medico.last_name as medApe', 'password', 'phonenumber', 'mobilenumber')
    	->join('Medico','medico.id','=','paciente.med_fam')
    	->join('Telefono', 'telefono.id', '=', 'paciente.telefono')
    	->get();

    	$medicos = Medico::select('id', 'first_name', 'last_name')
    	->get();
    	return view('pacientes', ['pacientes' => $pacientes], ['medicos' => $medicos]);
    }

    public function insert(Request $request)
    {
    	$paciente = new Paciente($request->all());
    	$telefono = new Telefono($request->all());
    	$telefono -> save();
    	$paciente -> telefono = $telefono -> id;
    	$paciente -> password = str_random(6);
    	$paciente -> save();
    	return Redirect::back()->with('success','Paciente registrado correctamente!');
    }

    public function delete($paciente)
    {
    	$pac = Paciente::find($paciente);
    	$pac -> delete();
    	return Redirect::back()->with('warning','Paciente eliminado correctamente!');
    }

    public function update($paciente)
    {
    	$pac = Paciente::find($paciente);
    	$tel = Telefono::find($pac->telefono);
    	$medicos = Medico::select('id', 'first_name', 'last_name')
    	->get();
    	return view('editPaciente', ['paciente' => $pac], ['medicos' => $medicos])
    	-> with('mobilenumber',$tel -> mobilenumber)
    	-> with('phonenumber', $tel -> phonenumber);
    }

    public function updateAction(Request $request)
    {
    	$paciente = Paciente::find($request->id);
    	$paciente -> fill($request->all());
    	$telefono = Telefono::find($request->telefono);
    	$telefono -> mobilenumber = $request -> mobilenumber;
    	$telefono -> phonenumber = $request -> phonenumber;
    	$paciente -> save();
    	$telefono -> save();
    	return Redirect::back()->with('success','Los datos se han actualizado correctamente!');
    }
}
