<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilPacientesController extends Controller
{
    public function mostrarPerfil()
    {
        $usuario = auth()->user();

        return view('usuarios.perfil-pacientes', compact('usuario'));
    }
}
