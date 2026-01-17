<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/Style_Inicio.css') }}">
<link rel="stylesheet" href="{{ asset('css/Style_Imagenes.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>El Sabor de Juanita</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2940b3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/El_sabor_de_juanita_isotipo.jpg') }}" alt="Logo" width="30" height="30" class="Hover">
                El Sabor de Juanita
            </a>

            <!-- Botón hamburguesa para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú colapsable -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="menu">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promociones">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservaciones">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <div class="Titulo mt-5 p-4 rounded shadow">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <img src="{{ asset('images/El_sabor_de_juanita_isotipo.jpg') }}" alt="El Sabor de Juanita Logo" width="210" height="210"
                    class="mb-3">
                <hr>
                <h2 class="fw-bold text-dark">Bienvenido a El Sabor de Juanita</h2>
                <p class="lead text-dark">
                    El Sabor de Juanita es un emprendimiento familiar que nació hace 4 años con el delicioso Baho y asados. Hemos
                    crecido ofreciendo mejores servicios y un menú más amplio.
                </p>
                <p class="text-secondary">
                    Nace con el deseo de compartir recetas auténticas que han pasado de generación en generación. Aquí, cada
                    cliente es parte de nuestra familia, y cada visita es una oportunidad para saborear lo mejor de nuestra
                    cultura. Somos tradición, sabor casero y alegría nicaragüense servida con cariño.
                </p>
                <hr>
            </div>
        </div>
    </div>
    <hr>


<div class="imagenes">
  <img src="{{ asset('images/Banner9.jpg') }}" alt="Banner 1">
  <img src="{{ asset('images/Banner3.jpg') }}" alt="Banner 3">
  <img src="{{ asset('images/Banner10.jpg') }}" alt="Banner 10">
  <img src="{{ asset('images/Banner8.jpg') }}" alt="Banner 8">
  <img src="{{ asset('images/Banner 5.jpg') }}" alt="Banner 5">
</div>

<hr>

    <div class="Visitanos">
        <div class="contenedor_footer">
            <div class="container mt-5 p-4 rounded shadow">
                <h4 class="fw-bold text-center mb-4 text-dark">Visítanos</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h6 class="fw-bold text-secondary">Dirección</h6>
                        <p class="text-dark">
                            Quiosco El Sabor de Juanita<br>
                            Rotonda Hugo Chavez, Managua, Nicaragua
                        </p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <h6 class="fw-bold text-secondary">Horarios</h6>
                        <ul class="list-unstyled text-dark">
                            <li><strong>Lunes a Viernes:</strong> 09:00 AM – 07:00 PM</li>
                            <li><strong>Sábado:</strong> 09:00 AM – 07:00 PM</li>
                            <li><strong>Domingo:</strong> 09:00 AM – 07:00 PM</li>
                        </ul>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a class="Links-logo" href="https://www.facebook.com/share/16mCJU6u96/"><img src="{{ asset('images/facebook.png') }}"
                            alt="Facebook" width="35"></a>


                    <a class="Links-logo" href="https://www.instagram.com/sabor_juanita42/"><img src="{{ asset('images/Instagram.png') }}"
                            alt="Facebook" width="35"></a>


                    <a class="Links-logo" href="https://www.tiktok.com/@saborjuanaita_?is_from_webapp=1&sender_device=pc"><img
                            src="{{ asset('images/images.png') }}" alt="Tiktok" width="35"></a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>