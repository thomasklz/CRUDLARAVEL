<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCarro extends Model
{
    public $table="tipocarros";
	public $timestamps = false; 
    protected $fillable = [
        'tipo'
    ];
}
