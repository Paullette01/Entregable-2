<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto; 

class ProyectoController extends Controller
{
    public function formulario()
    {
        return view('formulario-proyecto');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required',
            'cliente' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'tarifa' => 'required',
            'tipo' => 'required',
            'prioridad' => 'required',
            'lider_proyecto' => 'nullable',
            'lider_equipo' => 'nullable',
            'equipo' => 'nullable',
            'miembros_equipo' => 'nullable',
            'descripcion' => 'nullable',
            'archivos' => 'nullable',
        ]);

        // Subir y guardar los archivos relacionados si se han seleccionado
        if ($request->hasFile('archivos')) {
            $archivos = [];
            foreach ($request->file('archivos') as $archivo) {
                $rutaArchivo = $archivo->store('archivos', 'public');
                $archivos[] = $rutaArchivo;
            }
            $validatedData['archivos'] = $archivos;
        }

        // Crear el proyecto en la base de datos
        Proyecto::create($validatedData);

        return redirect()->route('proyecto.index')->with('success', 'Proyecto creado exitosamente');
    }

    public function index()
    {
        $proyectos = Proyecto::all();

        return view('proyectos', compact('proyectos'));
    }
}