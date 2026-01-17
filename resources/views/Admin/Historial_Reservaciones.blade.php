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

        <div class="card shadow-sm mb-4">
          <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <span>Gestión de Reservaciones</span>
            <button class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#cartitaAcciones">
              Ver detalles
            </button>
          </div>

          <div id="cartitaAcciones" class="collapse">
            <div class="card-body">
              <form action="" method="POST">
                <div class="mb-3">
                  <label>ID (para actualizar o eliminar):</label>
                  <input type="text" name="id" class="form-control" placeholder="Ej. 1">
                </div>

                <div class="mb-3">
                  <label>Nombre:</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Ej. Gabriel Soza">
                </div>

                <div class="mb-3">
                  <label>Personas:</label>
                  <input type="number" name="personas" class="form-control" placeholder="Ej. 4">
                </div>

                <div class="row mb-3">
                  <div class="col">
                    <label>Fecha:</label>
                    <input type="date" name="fecha" class="form-control">
                  </div>
                  <div class="col">
                    <label>Hora:</label>
                    <input type="time" name="hora" class="form-control">
                  </div>
                </div>

                <div class="mb-3">
                  <label>Comentarios:</label>
                  <textarea name="comentarios" class="form-control" rows="2" placeholder="Ej. Mesa cerca de la ventana"></textarea>
                </div>

                <div class="mb-3">
                  <label>Teléfono:</label>
                  <input type="tel" name="telefono" class="form-control" placeholder="Ej. 87541236">
                </div>

                <div class="mb-3">
                  <label>Correo Electronico:</label>
                  <input type="text" name="correo" class="form-control" placeholder="Ej. JoseGomez245@gmail.com">
                </div>

                <button type="submit" name="accion" value="actualizar">Actualizar</button>
                <button type="submit" name="accion" value="eliminar">Eliminar</button>
              </form>
            </div>
          </div>
          </form>

          <!-- Footer -->
          <footer class="app-footer text-center mt-4">
            <p>&copy; 2025 EL Sabor de Juanita. <br> Todos los derechos reservados.</p>
          </footer>

          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>