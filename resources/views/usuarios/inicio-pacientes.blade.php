<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="{{ asset('css/inicio-pacientes.css') }}">
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
    <div class="container-fluid text-center">
        
    <div class="row row-cols-2">
    <div class="col-4">
      <div class="Especialistas-info">
        <h4>Especialistas</h4>
        <li>Psicologo</li>
        <li>Endocrinólogo</li>
        <li>Urólogo</li>
        <li>Cardiólogo</li>
        <li>Cirujano</li>
        <li>Pediatra</li>
        <li>Traumatólogo</li>
        <li>Medicina Familiar</li>
        <li>Gastroenterólogo</li>
        <li>Especialista en lesiones de la médula espinal</li>
        <li>Cirujano neurólogo</li>
      </div>
    
    
    </div>


    <div class="col-8 align-self-center">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/esp1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/esp2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/esp3.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    </div>
    </div>
    
    </div>
    
</body>
</html>