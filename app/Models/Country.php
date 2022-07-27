<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar
    protected $table = "countries";

    //clave primaria de la tabla
    protected $primaryKey = "country_id";

    //omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;
}
