<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Medico;
use App\Telefono;

class MedicosController extends Controller
{
    public function index()
    {
    	$medicos = Medico::select('medico.id', 'first_name', 'last_name', 'cedula_prof', 'phonenumber', 'mobilenumber')
    	->join('Telefono', 'telefono.id', '=', 'medico.telefono')
    	->get();
    	return view('medicos',['medicos' => $medicos]);
    }

    public function insert(Request $request)
    {
    	$medico = new Medico($request -> all());
    	$telefono = new Telefono($request -> all());
    	$telefono -> save();
    	$medico -> telefono = $telefono -> id;
    	$medico ->save();
    	return Redirect::back() -> with('success', 'Médico registrado correctamente!');
    }

    public function delete($medico)
    {
    	$med = Medico::find($medico);
    	$med -> delete();
    	return Redirect::back() -> with('warning', 'Médico eliminado correctamente!');
    }

    public function update($medico)
    {
    	$med = Medico::find($medico);
    	$tel = Telefono::find($med->telefono);
    	return view('editMedico', ['medico' => $med], ['telefono' => $tel]);
    }

    public function updateAction(Request $request)
    {
    	$medico = Medico::find($request->id);
    	$medico -> fill($request->all());
    	$medico -> save();
    	$telefono = Telefono::find($medico->telefono);
    	$telefono -> fill($request->all());
    	$telefono -> save();
    	return Redirect::back() -> with('success', 'Médico actualizado correctamente!');
    }
}
