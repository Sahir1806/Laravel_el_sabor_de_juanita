<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu_Verificacion</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
                <!-- Saludo -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2>¡Buen día!</h2>
                        <p class="text-muted">Aquí tienes tus Menús</p>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <span>Gestión de Menús</span>
                        <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#cartitaAcciones">
                            Ver detalles
                        </button>
                    </div>

                    <div id="cartitaAcciones" class="collapse">
                        <div class="card-body">
                            <h2 class="mb-4">Verificación de Menús</h2>
                         <!-- Formulario -->
            <form action="{{ isset($menu) ? route('menu_verificacion.update',$menu->id) : route('menu_verificacion.store') }}" 
                  method="POST" enctype="multipart/form-data" class="mb-4">
                @csrf
                @if(isset($menu))
                    @method('PUT')
                @endif

                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="nombre" class="form-control" placeholder="Descripcion" 
                               value="{{ $menu->nombre ?? '' }}" required>
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="imagen" class="form-control" accept="image/*" 
                               @if(!isset($menu)) required @endif>
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="fecha_publicación" class="form-control" 
                               value="{{ $menu->fecha_publicación ?? '' }}" required>
                    </div>
                    <div class="col-md-6">
                        <select name="estado" class="form-select">
                            <option value="1" {{ (isset($menu) && $menu->estado==1) ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ (isset($menu) && $menu->estado==0) ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                </div>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-success">
                {{ isset($menu) ? 'Editar Menú' : 'Guardar Menú' }}
                </button>
                 @if(isset($menu))
                <a href="{{ route('menu_verificacion.index') }}" class="btn btn-secondary ms-2">
                 Cancelar
                </a>
                @endif
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
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Fecha de Publicación</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->nombre }}</td>
                                <td>
                                    @if($menu->imagen)
                                        <img src="{{ asset($menu->imagen) }}" alt="Imagen del menú" width="120">
                                    @else
                                        Sin imagen
                                    @endif
                                </td>
                                <td>{{ $menu->fecha_publicación }}</td>
                                <td>{{ $menu->estado ? 'Activo' : 'Inactivo' }}</td>
                                <td>
                                    <a href="{{ route('menu_verificacion.edit', $menu->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ route('menu_verificacion.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este menú?')">Eliminar</button>
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
