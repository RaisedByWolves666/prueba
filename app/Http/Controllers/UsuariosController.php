<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    //
    /**
     * summary
     */
    public function index()
    {

    	$usuario = Usuarios::all();
    	return view();
        
    }



    public function store(Request $request)
    {

    	/* $validatedData = $request->validate([
        'email' => 'required|unique:usuarios|max:50',
        ]);*/

        $rules = [
        'email' => 'required|unique:usuarios|max:50',
    ];

    $customMessages = [
        'unique' => 'El :attribute ya existe.'
    ];

    $this->validate($request, $rules, $customMessages);

        $usuario = new Usuarios([
            'usuario' => $request->input('usuario'),
            'nombre' => $request->input('nombre'), 
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email')
        ]);
        
        $usuario->save();

        return redirect('/')->with('Registrado', 'Cliente registrado');
}
    
}
