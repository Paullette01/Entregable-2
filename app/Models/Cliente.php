<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa',
        'rol',
        'nombre',
        'imagen',
        'employee_id',
        'telefono',
        'email',
        'fecha_nacimiento',
        'direccion',
        'genero',
    ];
}
