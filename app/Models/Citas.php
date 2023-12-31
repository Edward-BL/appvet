<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_citas';
    protected $fillable = ['nombre_mascota', 'raza_mascota', 'nombre_propietario', 'telefono_propietario','edad_mascota','sexo_mascota', 'fecha_cita', 'hora_cita', 'razon_cita'];
}
