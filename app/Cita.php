<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = "Cita";

    protected $fillable = ['paciente', 'medico', 'fecha', 'hora','receta', 'detalles', 'peso'];

    public $timestamps = false;

    public function medico()
    {
    	return $this->belongsTo('App\Medico');
    }

    public function paciente()
    {
    	return $this->belongsTo('App\Paciente');
    }

}
