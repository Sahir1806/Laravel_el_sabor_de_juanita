<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>historial_Promociones</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/Style_Portal.css') }}">
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
            <a class="nav-link" href="historial_bienvenida">Bienvenida</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historial_reservaciones">Reservaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu_verificacion">Menú</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historial_promociones">Promociones</a>
          </li>
        </ul>
      </div>

      <!-- Contenido principal -->
      <div class="col-md-10 p-4">
        <!-- Saludo -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h2>¡Buen día!</h2>
            <p class="text-muted">Aquí tienes tus promociones</p>
          </div>
        </div>
         @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
<div class="card shadow-sm mb-4">
  <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
    <span>Gestión de Promoción</span>
    <!-- Botón que despliega -->
    <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#cartitaAcciones">
      Ver detalles
    </button>
  </div>

  <!-- Contenido colapsable -->
  <div class="collapse" id="cartitaAcciones">
    <div class="card-body">

      <form action="{{ route('Historial_Promociones.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nombre:</label>
          <input type="text" name="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Imagen:</label>
          <input type="file" name="imagen" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Descripción:</label>
          <textarea name="descripcion" class="form-control"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Descuento (%):</label>
          <input type="number" name="descuento" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Fecha Inicio:</label>
          <input type="date" name="fecha_inicio" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Fecha Fin:</label>
          <input type="date" name="fecha_fin" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar Promoción</button>
      </form>
    </div>
  </div>
</div>

<hr>
<div class="table-responsive">
  <table class="table table-bordered table-striped align-middle w-100">
    <thead class="table-dark">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Descripción</th>
        <th>Descuento</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <body>
      @foreach($promociones as $promo)
        <tr>
          <td>{{ $promo->id }}</td>
          <td>{{ $promo->nombre }}</td>
          <td>
            <img src="{{ asset('promociones/' . $promo->imagen) }}" class="img-fluid img-thumbnail" width="100" alt="Imagen">
          </td>
          <td>{{ $promo->descripcion }}</td>
          <td>{{ $promo->descuento }}%</td>
          <td>{{ $promo->fecha_inicio }}</td>
          <td>{{ $promo->fecha_fin }}</td>
          <td>
            <div class="d-flex gap-2">
              <!-- Botón borrar -->
              <form action="{{ route('Historial_Promociones.destroy', $promo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta promoción?')">Borrar</button>
              </form>

              <!-- Botón editar -->
              <a href="{{ route('Historial_Promociones.edit', $promo->id) }}" class="btn btn-warning btn-sm">Editar</a>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

          <!-- Footer -->
          <footer class="app-footer text-center mt-4">
            <p>&copy; 2025 EL Sabor de Juanita. <br> Todos los derechos reservados.</p>
          </footer>

          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>