<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Style_Portal.css') }}">
    <title>Portal</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h2>El Sabor de Juanita</h2>
                <ul class="nav flex-column mt-4">
                    <li class="nav-item">
                        <a class="nav-link" href="portal">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historial_Bienvenida">Bienvenida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historial_Reservaciones">Reservaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Menu_Verificacion">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historial_Promociones">Promociones</a>
                    </li>
                </ul>
            </div>

            <!-- Contenido principal -->
            <div class="col-md-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2>¡Buen día!</h2>
                        <p class="text-muted">Aquí tienes un resumen de la de tu página</p>
                    </div>
                </div>

                <!-- Resumen -->


                <div class="row mb-4">

                    <div class="col-md-6">
                        <div class="card-custom p-3 shadow-sm">
                            <h6>Reservas</h6>
                            <small class="text-success">+1</small>
                            <a href="historial_Reservaciones.php" class="btn btn-outline-success mt-3 w-100">
                                Ver historial de reservaciones
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-custom p-3 shadow-sm">
                            <h6>Promociones</h6>
                            <h4 class="text-muted">Verifica tus promociones</h4>
                            <a href="historial_Promociones.php" class="btn btn-outline-success mt-3 w-100">
                                Ver historial de promociones
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Productos y Notificaciones -->
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>
<footer class="app-footer" style="text-align: center;">
    <p>&copy; 2025 EL Sabor de Juanita. <br> Todos los derechos reservados.</p>

</html>