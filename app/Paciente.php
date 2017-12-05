<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "Paciente";

    protected $fillable = ['first_name','last_name','med_fam','password','telefono'];

    public $timestamps = false;

    public function medico()
    {
    	return $this->belongsTo('App\Medico');
    }

    public function citas()
    {
    	return $this->hasMany('App\Cita');
    }

    public function telefono()
    {
    	return $this->belongsTo('App\Telefono');
    }
}
