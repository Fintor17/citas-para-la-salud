<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Registros;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/usuarios';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Nombre_apellido' => ['required', 'string', 'max:255'],
            'Edad' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:registros'],
            'Sexo' => ['required', 'string'],
            'Calle_num' => ['required', 'string'],
            'Colonia' => ['required', 'string'],
            'Codigo_postal' => ['required', 'integer'],
            'Estado' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Telefono' => ['required', 'string'],
            'Tipo_usuario' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Registros::create([
            'Nombre_apellido' => $data['Nombre_apellido'],
            'Edad' => $data['Edad'],
            'email' => $data['email'],
            'Sexo' => $data['Sexo'],
            'Calle_num' => $data['Calle_num'],
            'Colonia' => $data['Colonia'],
            'Codigo_postal' => $data['Codigo_postal'],
            'password' => Hash::make($data['password']),
            'Estado' => $data['Estado'],
            'Telefono' => $data['Telefono'],
            'Tipo_usuario' => $data['Tipo_usuario'],

        ]);
    }
}
