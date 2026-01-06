<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccesoController extends Controller
{
   
    public function showLogin()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {   

        // Validar los datos recibidos
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Verificar si el usuario tiene el campo 'cargo' no nulo
            $user = Auth::user();
            if (is_null($user->cargo_id)) {
                return redirect()->route('waiting');
            } else {
                return redirect()->route('index.index');
            }
        }

        // Si las credenciales no coinciden, regresar con error
        return back()->withErrors([
            'email' => 'El correo o la contraseña son incorrectos.',
        ])->withInput();
    }

    public function showWaiting()
    {
        return view('login.waiting');
    }

}