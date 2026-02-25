<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones | El Sabor de Juanita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Style_Promociones.css') }}">
</head>
<body>
    @include('assets.header')
    <hr>

    <section class="promociones">
        @forelse($promociones as $promocion)
            <div class="promo-card">
                @if($promocion->imagen)
                    <img src="{{ asset($promocion->imagen) }}" alt="{{ $promocion->nombre }}">
                @else
                    <img src="{{ asset('images/imagenes_promo/1770845057_Screenshot_20260204_151447.png') }}" alt="Promoción">
                @endif
                <div class="promo-content">
                    <h3>{{ $promocion->nombre }}</h3>
                    <p>{{ $promocion->descripcion }}</p>
                    @if($promocion->descuento)
                        <div class="badge bg-success mb-2">{{ $promocion->descuento }}% OFF</div>
                    @endif
                    <small class="text-muted d-block">
                        Válido del {{ \Carbon\Carbon::parse($promocion->fecha_inicio)->format('d/m/Y') }} 
                        al {{ \Carbon\Carbon::parse($promocion->fecha_fin)->format('d/m/Y') }}
                    </small>
                </div>
            </div>
        @empty
            <div class="text-center py-5">
                <h3>No hay promociones activas en este momento</h3>
                <p>¡Vuelve pronto para conocer nuestras ofertas especiales!</p>
            </div>
        @endforelse
    </section>

    <hr>
    @include('assets.footer')
</body>
</html>