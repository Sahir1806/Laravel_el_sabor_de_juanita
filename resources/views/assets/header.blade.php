
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/Style_Inicio.css') }}">
<link rel="stylesheet" href="{{ asset('css/Style_Imagenes.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <Header>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2940b3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="bienvenida">
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
                    <li class="nav-item">
                        <a class="nav-link" href="bienvenida">Bienvenida</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    </Header>

</body>
</html>

