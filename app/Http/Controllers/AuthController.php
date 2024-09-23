<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar las credenciales
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Intentar autenticar
        if (auth()->attempt($credentials)) {
            // Autenticación exitosa, redirigir a la página principal
            return redirect()->intended('home'); // Cambia 'home' por la ruta que desees
        }

        // Si falla, redirigir de nuevo con un mensaje de error
        return back()->withErrors([
            'username' => 'Las credenciales son incorrectas.',
        ]);
    }
}
