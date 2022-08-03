<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //la tabla a conectar
    protected $table = "regions";

    //clave primaria de la tabla
    protected $primaryKey = "region_id";

    //omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;

    //relación entre región y país

    public function paises(){
        return $this->hasMany(Country::class, 'region_id');
    }


    //relación entre region y continente
    public function continente(){
        return $this->belongsTo(Continent::class, 'continent_id' );
    }
}

