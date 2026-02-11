<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Style_Portal.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h2>El Sabor de Juanita</h2>
                <ul class="nav flex-column mt-4">
                    <li class="nav-item"><a class="nav-link" href="portal">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="historial_bienvenida">Bienvenida</a></li>
                    <li class="nav-item"><a class="nav-link" href="historial_reservaciones">Reservaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu_verificacion">Menú</a></li>
                    <li class="nav-item"><a class="nav-link" href="historial_promociones">Promociones</a></li>
                </ul>
            </div>

            <!-- Contenido principal -->
            <div class="col-md-10 p-4">
                <h2 class="mb-4">Gestión de Bienvenidas</h2>

                   <div class="card shadow-sm mb-4">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <span>Gestión de Bienvenidas</span>
                        <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#cartitaAcciones">
                            Ver detalles
                        </button>
                    </div>

                    <div id="cartitaAcciones" class="collapse">
                        <div class="card-body">
                            <h2 class="mb-4">Verificación de Bienvenida</h2>

                <!-- Formulario -->
                <form action="{{ route('historial_bienvenida.store') }}" method="POST" enctype="multipart/form-data" class="mb-4">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="file" name="imagen" class="form-control" accept="image/*" required>
                        </div>
                        <div class="col-md-6">
                            <select name="estado" class="form-select">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-success">Guardar Bienvenida</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

                <!-- Tabla -->
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bienvenidas as $bienvenida)
                            <tr>
                                <td>{{ $bienvenida->id }}</td>
                                <td>
                                    @if($bienvenida->imagen)
                                        <img src="{{ asset($bienvenida->imagen) }}" alt="Imagen bienvenida" width="150">
                                    @else
                                        Sin imagen
                                    @endif
                                </td>
                                <td>{{ $bienvenida->estado ? 'Activo' : 'Inactivo' }}</td>
                                <td>
                                    <a href="{{ route('historial_bienvenida.edit', $bienvenida->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ route('historial_bienvenida.destroy', $bienvenida->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta bienvenida?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Footer -->
                <footer class="app-footer text-center mt-4">
                    <p>&copy; 2025 EL Sabor de Juanita. <br> Todos los derechos reservados.</p>
                </footer>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>