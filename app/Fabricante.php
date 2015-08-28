<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model {

	protected $table = 'fabricantes';

	protected $fillable = array('nombre', 'telefono');

	public function vehiculos()
	{
		return $this->hasMany('Vehiculo');
	}
}
