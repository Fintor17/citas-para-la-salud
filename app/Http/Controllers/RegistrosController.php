<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'Nombre_apellido' => 'required|string|max:255',
        'Edad' => 'required|integer|min:0',
        'email' => 'required|email|unique:registros,email',
        'Sexo' => 'required|string',
        'calle_num' => 'required|string|max:255',
        'colonia' => 'required|string|max:255',
        'Codigo_postal' => 'required|integer',
        'estado' => 'required|string|max:255',
        'password' => 'required|confirmed',
        'Telefono' => 'required|string|max:15',
        'Tipo_usuario' => 'required|string',
    ]);

    // Crear un nuevo usuario y encriptar la contraseña
    Registros::create([
        'Nombre_apellido' => $request->Nombre_apellido,
        'Edad' => $request->Edad,
        'email' => $request->email,
        'Sexo' => $request->Sexo,
        'calle_num' => $request->calle_num,
        'colonia' => $request->colonia,
        'Codigo_postal' => $request->Codigo_postal,
        'estado' => $request->estado,
        'password' => Hash::make($request->password),
        'Telefono' => $request->Telefono,
        'Tipo_usuario' => $request->Tipo_usuario,
    ]);

    // Redirigir a la vista de inicio de sesión u otra vista
    return redirect()->route('usuarios.index')->with('success', 'Registro exitoso. Por favor inicia sesión.');
}





    /**
     * Display the specified resource.
     */
    public function show(Registros $registros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registros $registros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registros $registros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registros $registros)
    {
        //
    }
}

