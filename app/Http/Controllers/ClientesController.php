<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    public function formularioCliente(){
        return view('formularioClientes');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'empresa' => 'required',
            'rol' => 'required',
            'nombre' => 'required',
            'imagen' => 'required',
            'employee_id' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required',
            'genero' => 'required',
        ]);

        // Crear el nuevo cliente
        $cliente = Cliente::create([
            'empresa' => $validatedData['empresa'],
            'rol' => $validatedData['rol'],
            'nombre' => $validatedData['nombre'],
            'imagen' => $validatedData['imagen'],
            'employee_id' => $validatedData['employee_id'],
            'telefono' => $validatedData['telefono'],
            'email' => $validatedData['email'],
            'fecha_nacimiento' => $validatedData['fecha_nacimiento'],
            'direccion' => $validatedData['direccion'],
            'genero' => $validatedData['genero'],
        ]);

        return redirect()->route('cliente.formulario', $cliente->id)->with('success', 'El cliente ha sido creado exitosamente.');
    }

    public function index()
    {
        $clientes = Cliente::all();

        return view('clientes', compact('clientes'));
    }


}
