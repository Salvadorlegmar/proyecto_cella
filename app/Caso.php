<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $fillable = ['Trazabilidad_hospital','Fecha_hora_de_alta'];
    public $timestamps = false;
    protected $primaryKey = 'ID_CASO';


}
