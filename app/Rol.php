<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "Rol";

    protected $fillable = ['name'];

    public $timestamps = false;

    public function usuarios()
    {
    	return $this->hasMany('App\User');
    }
}
