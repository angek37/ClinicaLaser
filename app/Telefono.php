<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table = "Telefono";

    protected $fillable = ['phonenumber', 'mobilenumber'];

    public $timestamps = false;

    public function medicos()
    {
    	return $this->hasMany('App\Medico');
    }

    public function pacientes()
    {
    	return $this->hasMany('App\Paciente');
    }
}
