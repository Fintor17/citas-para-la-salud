<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de datos</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}" />
</head>
<body>
    <div class="contenedor_reg">
        <div class="titulo">
            <h1>Registra tus datos</h1>
        </div>
        <form action="{{ url('/usuarios') }}" method="post">
            @csrf
            <div class="datos_reg" id="dnombre">
                <input type="text" class="input_reg" name="Nombre_apellido" id="nombre" placeholder="" required>
                <label for="nombre" class="label_reg">Nombre y Apellido</label>
            </div>
            <div class="datos_reg" id="dedad">
                <input type="number" class="input_reg" name="Edad" id="edad" placeholder="" required>
                <label for="edad" class="label_reg">Edad</label>
            </div>
            <div class="datos_reg">
                <input type="email" class="input_reg" name="email" id="correo" placeholder="" required>
                <label for="correo" class="label_reg">Correo Electrónico</label>
            </div>
            <div class="datos_reg">
                <label for="sexo" class="label_reg">Sexo</label>
                <select name="Sexo" id="sexo" class="input_reg">
                    <option value="" disabled selected></option> <!-- Opción vacía por defecto -->
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                </select>
            </div>
            <div class="datos_reg">
                <input type="text" class="input_reg" name="calle_num" id="calle" placeholder="" required>
                <label for="calle" class="label_reg">Calle y número</label>
            </div>
            <div class="datos_reg">
                <input type="text" class="input_reg" name="colonia" id="colonia" placeholder="" required>
                <label for="colonia" class="label_reg">Colonia</label>
            </div>
            <div class="datos_reg">
                <input type="number" class="input_reg" name="Codigo_postal" id="CP" placeholder="" required>
                <label for="CP" class="label_reg">Código Postal</label>
            </div>
            <div class="datos_reg">
                <input type="text" class="input_reg" name="estado" id="estado" placeholder="" required>
                <label for="estado" class="label_reg">Estado</label>
            </div>
            <div class="datos_reg">
                <input type="password" class="input_reg" name="password" id="contraseña" placeholder="" required>
                <label for="contraseña" class="label_reg">Contraseña</label>
            </div>
            <div class="datos_reg">
                <input type="password" class="input_reg" name="password_confirmation" id="confirmar_contraseña" placeholder="" required>
                <label for="confirmar_contraseña" class="label_reg">Confirmar contraseña</label>
            </div>
            <div class="datos_reg">
                <input type="text" class="input_reg" name="Telefono" id="telefono" placeholder="" required>
                <label for="telefono" class="label_reg">Teléfono</label>
            </div>
            <div class="datos_reg">
                <label for="Tipo_usuario" class="label_reg">Tipo de usuario</label>
                <select name="Tipo_usuario" id="Tipo_usuario" class="input_reg">
                    <option value="" disabled selected></option> <!-- Opción vacía por defecto -->
                    <option value="Especialista">Especialista</option>
                    <option value="Paciente">Paciente</option>
                </select>
            </div>
            <div class="registrar">
                <button class="btnregistrar" type="submit">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>
