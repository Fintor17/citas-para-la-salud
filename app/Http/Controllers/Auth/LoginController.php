<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Importa la clase Log
use App\Models\Registros;


class LoginController extends Controller
{
    

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'inicio-pacientes';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        Log::info('Login method called');  // Agregar esta línea
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        Log::info('Validation passed');  // Verifica si se pasa la validación
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Log::info('User authenticated: ' . $request->email);
            return redirect()->intended($this->redirectTo);
        } else {
            Log::warning('Authentication failed for user: ' . $request->email);
            return back()->withErrors([
                'email' => 'Las credenciales proporcionadas son incorrectas.',
            ]);
        }
    }


    
    
}
