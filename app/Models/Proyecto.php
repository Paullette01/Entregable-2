<?php 

namespace App\Models;
use Illuminate\Http\Request;

class Proyecto extends Model
{
    protected $fillable = [
        'costo_total',
        'horas_total',
        'fecha_creacion',
        'creador',
        'estado_trabajo',
        'titulo',
        'descripcion',
        'fecha_limite',
        'tareas',
        'barra_progreso',
    ];

    public function colaboradores()
    {
        return $this->belongsToMany(Colaborador::class);
    }

    public function lideresProyecto()
    {
        return $this->belongsToMany(Colaborador::class, 'lideres_proyecto', 'proyecto_id', 'colaborador_id');
    }
}