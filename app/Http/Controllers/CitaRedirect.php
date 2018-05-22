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
		$citas = Cita::select('Cita.id','Paciente.first_name as PasNom', 'Paciente.last_name as PasApe', 'Medico.first_name as MedNom', 'Medico.last_name as MedApe', 'fecha', 'hora','detalles')
		->join('Medico', 'Medico.id', '=', 'Cita.medico')
		->join('Paciente', 'Paciente.id', '=', 'Cita.paciente')
		->get();

		return view('citas',['db' => $date], ['citas' => $citas]);
    }
}
