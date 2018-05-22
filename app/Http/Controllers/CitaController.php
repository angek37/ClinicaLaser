<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Cita;
use App\Paciente;

class CitaController extends Controller
{

	public function index(Request $request)
	{
		$date = \Carbon\Carbon::parse($request->current_date);
		$day = $date->day;
		$month = $date->month;
		$year = $date->year;

		return view('welcome', ['db' => $date]);
	}

	public function insert(Request $request)
	{
		$paciente = Paciente::select('Paciente.id as paciente', 'Medico.id as medico')
		-> join('Medico','Medico.id','=','Paciente.med_fam')
		-> where('password',$request->password)
		-> first();
		if(count($paciente) > 0){
			$cita = new Cita($request->all());
			$cita -> paciente = $paciente -> paciente;
			$cita -> medico = $paciente -> medico;
			$cita -> save();
			$date = \Carbon\Carbon::parse($request->current_date);
			$day = $date->day;
			$month = $date->month;
			$year = $date->year;
			return Redirect::back()
			->with(['db' => $date])
			->with('success','Su cita se ha creado exitosamente');
		}else{
			$date = \Carbon\Carbon::parse($request->current_date);
			$day = $date->day;
			$month = $date->month;
			$year = $date->year;
			return Redirect::back()
			->with(['db' => $date])
			->with('error','La clave de acceso es incorrecta');
		}
	}

	public function cancel($cita)
	{
		$ci = Cita::find($cita);
		$ci -> delete();
		return Redirect::back()
		->with('warning','La cita se ha cancelado');
	}

	public function complete($cita)
	{
		$ci = Cita::select('Cita.id', 'Paciente.first_name as NomPas', 'Paciente.last_name as ApePas', 'Medico.first_name as NomMed', 'Medico.last_name as ApeMed', 'fecha', 'hora')
		->join('Paciente','Paciente.id','=','Cita.paciente')
		->join('Medico','Medico.id','=','Cita.medico')
		->where('Cita.id', $cita)
		->first();
		return view('FinishCita', ['cita' => $ci]);
	}

	public function updateAction(Request $request)
	{
		$cita = Cita::find($request->id);
		$cita -> fill($request->all());
		$cita -> save();
		return Redirect::back()
		->with('success','La cita se ha completado!');
	}
}
