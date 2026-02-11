<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Menú</title>
    <link rel="stylesheet" href="{{ asset('css/Style_Inicio.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
</head>
<body style="background-color: #434dbc;">

    @include('assets.header')

    <hr>

<div class="container mt-4 p-4 rounded shadow" style="background-color: #fff8f0; border: 2px solid #f0c090;">
    <h3 class="text-center fw-bold text-dark mb-4">Nuestro Menú</h3>
    <hr>
    <div class="row justify-content-center">
    @forelse($menus as $menu)
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm h-100">
                @if($menu->imagen)
                    <img src="{{ asset($menu->imagen) }}" class="card-img-top" alt="Imagen del menú">
                @endif
                <div class="card-body text-center">
                    <h7 class="card-title fw-bold">{{ $menu->nombre }}</h7>
                    <p class="card-text">
                        Publicado el: {{ $menu->fecha_publicación }} <br>
                        Estado: {{ $menu->estado ? 'Activo' : 'Inactivo' }}
                    </p>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center">No hay menús disponibles por el momento.</p>
    @endforelse
</div>
</div>
    </div>

    @include('assets.footer')

</body>
</html>