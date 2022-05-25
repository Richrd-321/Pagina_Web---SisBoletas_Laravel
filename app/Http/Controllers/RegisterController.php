<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // Validacion
    public function store(Request $request){
        $request ->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            
        ]);

        // Creamos el Objeto
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
    
        $boletas->save();

        // Redirigiendo al usuario
        return redirect()->route('login.index')->with('success', 'Registro creado exitosamente');
    }

    public function create() {
        //return view('auth.register');
        $user = User::all();

        return view('auth.register', ['register' => $user]);
    }

    
}
