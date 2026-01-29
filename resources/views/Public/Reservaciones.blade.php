<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="{{ asset('css/Style_Reservaciones.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</head>



<body style="background-color: #434dbc;">
 @include('assets.header')
    <hr>
<section class="reservaciones mt-5">
    <h2 class="text-center mb-4">Reservaciones</h2>

    @if(session('success'))
        <div class="alert alert-success text-center" style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif

    <form method="POST" action="{{ route('reservaciones.store') }}">
        @csrf <div class="row g-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>

            <div class="col-md-6">
                <label for="personas" class="form-label">Número de personas</label>
                <input type="number" class="form-control" name="personas" id="personas" min="1" max="6" required>
            </div>

            <div class="col-md-6">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" required>
            </div>

            <div class="col-md-6">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" name="hora" id="hora" required>
            </div>

            <div class="col-md-6">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" name="telefono" id="telefono" required>
            </div>

            <div class="col-md-6">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" name="correo" id="correo" required>
            </div>

            <div class="col-12">
                <label for="comentarios" class="form-label">Comentarios adicionales</label>
                <textarea class="form-control" name="comentarios" id="comentarios" rows="3"></textarea>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-reservar" style="background-color: #434dbc; color:white;">
                    Reservar ahora
                </button>
            </div>
        </div>
    </form>
</section>

@include('assets.footer')
</body>



</html>