<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        public function index()
    {
        
        return view('login');
    }


  

public function store(Request $request)
        {
            $credentials = $request->only('email', 'password');
            
            if (Auth::attempt($credentials)) {
                // Autenticación exitosa
                return redirect()->intended('/');
            } else {
                // Autenticación fallida
                return back()->withErrors([
                    'email' => 'Las credenciales proporcionadas son incorrectas.',
                ]);
            }
        }

public function logout()
{
            Auth::logout();
            return redirect()->route('login.index');
}
        
    
    

}
