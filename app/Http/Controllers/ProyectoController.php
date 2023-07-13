<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;


class ProyectoController extends Controller{

    public function store(Request $request)
    {
        // Validación de los datos recibidos desde el formulario
        $validatedData = $request->validate([
            'costo_total' => 'required',
            'horas_total' => 'required',
            'fecha_creacion' => 'required',
            'creador' => 'required',
            'estado_trabajo' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha_limite' => 'required',
            'colaboradores' => 'required|array',
            'lideres_proyecto' => 'required|array',
            'tareas' => 'required',
            'barra_progreso' => 'required',
            'imagenes' => 'nullable|array',
            'archivos' => 'nullable|array',
        ]);

        // Crear un nuevo objeto Proyecto y asignar los valores recibidos desde el formulario
        $proyecto = new Proyecto();
        $proyecto->costo_total = $validatedData['costo_total'];
        $proyecto->horas_total = $validatedData['horas_total'];
        $proyecto->fecha_creacion = $validatedData['fecha_creacion'];
        $proyecto->creador = $validatedData['creador'];
        $proyecto->estado_trabajo = $validatedData['estado_trabajo'];
        $proyecto->titulo = $validatedData['titulo'];
        $proyecto->descripcion = $validatedData['descripcion'];
        $proyecto->fecha_limite = $validatedData['fecha_limite'];
        $proyecto->tareas = $validatedData['tareas'];
        $proyecto->barra_progreso = $validatedData['barra_progreso'];

        // Guardar el proyecto en la base de datos
        $proyecto->save();

        // Asignar colaboradores al proyecto
        $proyecto->colaboradores()->sync($validatedData['colaboradores']);

        // Asignar líderes de proyecto al proyecto
        $proyecto->lideresProyecto()->sync($validatedData['lideres_proyecto']);

        // Subir imágenes y archivos, si se proporcionaron
        if ($request->hasFile('imagenes')) {
            // Procesar las imágenes subidas
        }

        if ($request->hasFile('archivos')) {
            // Procesar los archivos subidos
        }

    }
}


