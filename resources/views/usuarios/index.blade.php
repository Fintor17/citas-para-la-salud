<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas para la salud</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}" />
</head>
<body>
    <div id="container">
        <div id="I">
            <div id="I_objetos">
                <p class="login_label">Evita filas o largas esperas en llamada. <br>
                ¡Agenda en línea!
                </p>
                <a href="{{ route('usuarios.create') }}" class="Button_login">Registrarse</a>
                </div>
        </div>

        <div id="D">
            <div id="D_objetos">
                <p class="login_label">Iniciar Sesión</p>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('login') }}">
                @csrf <!-- Token de seguridad -->
                <!-- Input para correo con label -->
                <div class="input_container">
                    <input type="email" class="input_email" id="email" name="email" placeholder="" required>
                    <label class="lblcorreo" for="email">Correo Electrónico</label>
                </div>
                
                <!-- Input para contraseña con label -->
                <div class="input_container">
                    <input type="password" class="input_contra" id="password" name="password" placeholder="" required>
                    <label class="lblcontra" for="password">Contraseña</label>
                </div>
                <button type="submit" class="Button_login">Iniciar Sesión</button> <!-- Sin onclick -->
                </form>      
            </div>
        </div>
    </div>
</body>
</html>
