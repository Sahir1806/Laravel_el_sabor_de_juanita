<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones | El Sabor de Juanita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Style_Promociones.css') }}">
</head>

<body>

<section class="promociones">
  <div class="promo-card">
    <img src="{{ asset('images/tajadaconqueso.jpg') }}" alt="Combo Nica">
    <div class="promo-content">
      <h3>Combo Nica</h3>
      <p>Gallo pinto, tajadas, queso frito y café por solo C$120. ¡Solo este mes!</p>
    </div>
  </div>

  <div class="promo-card">
    <img src="{{ asset('images/jugosnaturales[1].jpg') }}" alt="2x1 Jugos">
    <div class="promo-content">
      <h3>2x1 en Jugos Naturales</h3>
      <p>Disfruta de nuestros jugos tropicales en promoción todos los viernes.</p>
    </div>
  </div>

  <div class="promo-card">
    <img src="{{ asset('images/Banner10.jpg') }}" alt="Descuento Estudiantes">
    <div class="promo-content">
      <h3>Descuento Estudiantil</h3>
      <p>Presenta tu carnet y recibe 15% de descuento en tu orden.</p>
    </div>
  </div>
</section>


    <hr>

    @include('assets.footer')

</body>

</html>