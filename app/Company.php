<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table = 'company';
    protected $fillable = [
        'nombre','imagen', 'telefono', 'lat', 'alt', 'correo', 'direccion'
    ];
}
