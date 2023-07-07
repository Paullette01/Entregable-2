<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class RegisterController extends Controller
{   public function index()
    {
     return view('register');    
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
    
        // Puedes agregar cualquier lógica adicional que necesites aquí
    
        return redirect()->route('login.index')->with('success', 'Usuario creado exitosamente. Ahora puedes iniciar sesión.');
    }
}    
