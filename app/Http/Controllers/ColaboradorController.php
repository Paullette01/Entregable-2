<?php
namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function formularioColaborador()
    {
        return view('formulario-colaborador');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required',
            'numero_empleado' => 'nullable',
            'fecha_ingreso' => 'nullable|date',
            'telefono' => 'nullable',
            'correo' => 'nullable|email',
            'fecha_nacimiento' => 'nullable|date',
            'direccion' => 'nullable',
            'genero' => 'nullable',
            'imagen' => 'nullable|image',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = $imagen->getClientOriginalName();
            $rutaImagen = public_path('uploads') . '/' . $nombreImagen;
            $imagen->move(public_path('uploads'), $nombreImagen);
            $validatedData['imagen'] = $nombreImagen;
        } else {
            $validatedData['imagen'] = null;
        }
    

        Colaborador::create($validatedData);

        return redirect()->route('colaborador.index')->with('success', 'Colaborador creado exitosamente');
    }

    public function index()
    {
        $colaboradores = Colaborador::all();

        return view('colaboradores', compact('colaboradores'));
    }
}

