<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Importa la clase Authenticatable
use Illuminate\Notifications\Notifiable; // Importa el trait Notifiable
use Illuminate\Database\Eloquent\Factories\HasFactory; // Importa el trait HasFactory

class Registros extends Authenticatable // Extiende de Authenticatable
{
    use HasFactory, Notifiable; // Usa los traits HasFactory y Notifiable

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre_apellido',
        'Edad',
        'email',
        'Sexo',
        'calle_num',
        'colonia',
        'Codigo_postal',
        'estado',
        'password',
        'Telefono',
        'Tipo_usuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', // Oculta la contraseña en las respuestas JSON
        'remember_token', // Oculta el token de "recordar"
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Define cómo se debe convertir el atributo
    ];
}
