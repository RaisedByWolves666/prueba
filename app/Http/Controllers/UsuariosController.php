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
    	
        $usuario = new Usuarios([
            'usuario' => $request->input('usuario'),
            'nombre' => $request->input('nombre'), 
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email')
        ]);
        
        $usuario->save();

        return redirect()->route('/')->with('Registrado', 'cliente registrado');
}
    
}
