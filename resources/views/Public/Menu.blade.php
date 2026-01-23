<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Style_Inicio.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

</head>

<body>

    <body style="background-color: #434dbc;">

@include('assets.header')

        <hr>


        <div class="container mt-4 p-4 rounded shadow" style="background-color: #fff8f0; border: 2px solid #f0c090;">
            <h3 class="text-center fw-bold text-dark mb-4">Nuestro Menú</h3>
         <hr>
         <div class="row justify-content-center">
         <div class="col-lg-10 text-center">
        <img src="{{ asset('images/Menu.jpeg') }}" alt="Menú El Sabor de Juanita" class="img-fluid rounded shadow" style="width: 100%; max-width: 1000px;">
         <hr>
         <p>Deleitate con nuestras comidas típicas, guirilas rellenas y bebidas tradicionales nicaragüenses. ¡Sabores que cuentan historias!</p>
        </div>
     </div>
</div>

    @include('assets.footer')
        
    </body>

</html>