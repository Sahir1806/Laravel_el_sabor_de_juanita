<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones | El Sabor de Juanita</title>
    <link rel="stylesheet" href="{{ asset('css/Style_Promociones.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: #cacacbff;">
            <a class="navbar-brand" href="#">
                <img src="{{ assets('images/El_sabor_de_juanita_isotipo.jpg') }}" alt="Logo" width="30" height="30" class="Hover">
                El Sabor de Juanita
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="bienvenida">Bienvenida</a></li>
                    <li class="nav-item"><a class="nav-link active" href="menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link active" href="reservaciones">Reservaciones</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <hr>

      <section class="promo-section">
    <h2>Promociones Especiales</h2>
    <div class="promo-cards">

      <div class="promo-card">
        <img src="{{ assets('images/tajadasconqueso') }}" alt="Combo Nica">
        <div class="promo-content">
          <h3>Combo Nica</h3>
          <p>Gallo pinto, tajadas, queso frito y café por solo C$120. ¡Solo este mes!</p>
          <a href="#">Ordenar ahora</a>
        </div>
      </div>

      <div class="promo-card">
        <img src="{{ assets('images/jugosnaturales[1].jpg') }}" alt="2x1 Jugos">
        <div class="promo-content"> 
          <h3>2x1 en Jugos Naturales</h3>
          <p>Disfruta de nuestros jugos tropicales en promoción todos los viernes.</p>
          <a href="#">Ver más</a>
        </div>
      </div>

      <div class="promo-card">
        <img src="{{ assets('images/Banner10.jpg') }}" alt="Descuento Estudiantes">
        <div class="promo-content">
          <h3>Descuento Estudiantil</h3>
          <p>Presenta tu carnet y recibe 15% de descuento en tu orden.</p>
          <a href="">Aplicar ahora</a>
        </div>
      </div>


    <hr>

    <div class="Visitanos">
        <div class="contenedor_footer">
            <div class="container mt-5 p-4 rounded shadow" style="background-color: #fff8f0; border: 2px solid #f0c090;">
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


                    <a class="Links-logo" href="https://www.instagram.com/sabor_juanita42/"><img src="{{ asset('images/facebook.png') }}"
                            alt="Facebook" width="35"></a>


                    <a class="Links-logo" href="https://www.tiktok.com/@saborjuanaita_?is_from_webapp=1&sender_device=pc"><img
                            src="{{ asset('images/images.png') }}" alt="Tiktok" width="35"></a>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>