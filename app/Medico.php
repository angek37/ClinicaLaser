<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = "Medico";

    protected $fillable = ['first_name','last_name','cedula_prof','telefono'];

    public $timestamps = false;

    public function citas()
    {
    	return $this->hasMany('App\Cita');
    }

    public function pacientes()
    {
    	return $this->hasMany('App\Paciente');
    }

    public function telefono()
    {
    	return $this->belongsTo('App\Telefono');
    }
}
