<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    public $fillable = ['nombre', 'cif', 'email', 'direccion', 'poblacion', 'cp', 'telefono1', 'telefono2', 'fax', 'sector_productivo', 'actividad_principal', 'titularidad', 'representante_nombre', 'representante_nif'];
}
