<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Colaborador extends Model
{
protected $table = 'colaboradores';
    protected $fillable = [
        'nombre',
        'especialidad',
        'numero_empleado',
        'fecha_ingreso',
        'telefono',
        'correo',
        'fecha_nacimiento',
        'direccion',
        'genero',
        'imagen',
    ];

    use HasFactory;
}

