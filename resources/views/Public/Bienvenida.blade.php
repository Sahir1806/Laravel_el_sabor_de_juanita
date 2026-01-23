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
@include('assets.header')
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

@include('assets.footer')

</body>

</html>