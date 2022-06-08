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
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
    
        $users->save();

        // Redirigiendo al usuario
        return redirect()->route('login.index')->with('success', 'Registro creado exitosamente');
    }

    public function create() {
        //return view('auth.register');
        $users = User::all();

        return view('auth.register', ['register' => $users]);
    }

    
}
