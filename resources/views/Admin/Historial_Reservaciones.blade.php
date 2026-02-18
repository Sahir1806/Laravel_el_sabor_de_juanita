<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>historial_reservaciones</title>

  <!-- Bootstrap -->
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
        <h2 class="mb-4">Gestión de Reservaciones</h2>

        <div class="card shadow-sm mb-4">
          <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <span>Gestión de Reservaciones</span>
            <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#cartitaAcciones">
              Ver detalles
            </button>
          </div>

          <!-- Cartita de acciones -->
          <form action="{{ isset($reservacion) ? route('Historial_Reservaciones.update',$reservacion->id) : route('Historial_Reservaciones.store') }}" 
                method="POST" class="mb-4">
            @csrf
            @if(isset($reservacion))
              @method('PUT')
            @endif

            <div class="collapse" id="cartitaAcciones">
              <div class="card-body">
                <div class="col-md-6"><input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $reservacion->nombre ?? '' }}" required></div>
                <div class="col-md-6 mt-3"><input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ $reservacion->telefono ?? '' }}" required></div>
                <div class="col-md-6 mt-3"><input type="email" name="correo" class="form-control" placeholder="Correo" value="{{ $reservacion->correo ?? '' }}" required></div>
                <div class="col-md-6 mt-3"><input type="date" name="fecha" class="form-control" value="{{ $reservacion->fecha ?? '' }}" required></div>
                <div class="col-md-6 mt-3"><input type="time" name="hora" class="form-control" value="{{ $reservacion->hora ?? '' }}" required></div>
                <div class="col-md-6 mt-3"><input type="number" name="personas" class="form-control" placeholder="Personas" value="{{ $reservacion->personas ?? '' }}" required></div>
                <div class="col-12 mt-3"><textarea name="comentarios" class="form-control" rows="2" placeholder="Comentarios">{{ $reservacion->comentarios ?? '' }}</textarea></div>

                <div class="text-end mt-3">
                  <button type="submit" class="btn btn-success">
                    {{ isset($reservacion) ? 'Editar Reservación' : 'Guardar Reservación' }}
                  </button>
                  @if(isset($reservacion))
                    <a href="{{ route('Historial_Reservaciones.index') }}" class="btn btn-secondary ms-2">
                      Cancelar
                    </a>
                  @endif
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- Tabla -->
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Personas</th>
              <th>Fecha</th>
              <th>Hora</th>
              <th>Teléfono</th>
              <th>Correo</th>
              <th>Comentarios</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($reservaciones as $reserva)
              <tr>
                <td>{{ $reserva->id }}</td>
                <td>{{ $reserva->nombre }}</td>
                <td>{{ $reserva->personas }}</td>
                <td>{{ $reserva->fecha }}</td>
                <td>{{ $reserva->hora }}</td>
                <td>{{ $reserva->telefono }}</td>
                <td>{{ $reserva->correo }}</td>
                <td>{{ $reserva->comentarios }}</td>
                <td>
                  <a href="{{ route('Historial_Reservaciones.edit', $reserva->id) }}" class="btn btn-warning btn-sm">Editar</a>
                  <form action="{{ route('Historial_Reservaciones.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta reservación?')">Eliminar</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>