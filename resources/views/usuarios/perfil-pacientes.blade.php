<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="{{ asset('css/perfil-pacientes.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="titulo">
        <h1>Citas en línea</h1>
    </div>
    <div class="menu">
        <div class="cont_opciones">
            <div class="cinta"><a href="/usuarios/inicio-pacientes">Inicio</a></div>
            <div class="cinta"><a href="usuarios.agenda-pacientes">Agendar cita</a></div>
            <div class="cinta"><a href="{{ route('perfil.pacientes') }}">Perfil</a></div>
            <div class="cinta"><a href="usuarios.index">Cerrar Sesión</a></div>
        </div>
    </div>

    <div class="perfil_datos">
    <table>
  <tr>
    <th>Concepto</th>
    <th>Valor</th>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>{{ $usuario->Nombre_apellido }}</td>
  </tr>
  <tr>
    <td>Edad</td>
    <td>{{ $usuario->Edad }}</td>
  </tr>
</table>
    </div>


    </body>
</html>