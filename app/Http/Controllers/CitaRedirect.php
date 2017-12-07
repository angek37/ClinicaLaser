<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\Medico;
use App\Paciente;

class CitaRedirect extends Controller
{
    public function index(Request $request)
    {
    	$date = \Carbon\Carbon::parse($request->current_date);
		$day = $date->day;
		$month = $date->month;
		$year = $date->year;
		$citas = Cita::select('cita.id','paciente.first_name as PasNom', 'paciente.last_name as PasApe', 'medico.first_name as MedNom', 'medico.last_name as MedApe', 'fecha', 'hora','detalles')
		->join('Medico', 'medico.id', '=', 'cita.medico')
		->join('Paciente', 'paciente.id', '=', 'cita.paciente')
		->get();

		return view('citas',['db' => $date], ['citas' => $citas]);
    }
}
