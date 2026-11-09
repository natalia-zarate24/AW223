<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceso de Empleado - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior oscura -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Login</span>
    </div>
  </header>

  <!-- Contenedor centralizado de Login -->
  <main class="login-screen-wrapper">
    <div class="login-card">
      <h1 class="login-title">ACCESO DE EMPLEADO</h1>
      <p class="login-subtitle">Personal de Tienda y Mostrador</p>

      <!-- Alerta de validación idéntica al PDF -->
      <div class="login-alert-error" role="alert">
        <div class="alert-title">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="15" y1="9" x2="9" y2="15"></line>
            <line x1="9" y1="9" x2="15" y2="15"></line>
          </svg>
          ERROR DE VALIDACIÓN
        </div>
        <div class="alert-desc">
          Los datos ingresados son incorrectos. Verifica tu clave de acceso y tu ID.
        </div>
      </div>

      <!-- Formulario de acceso con navegación a la vista de empleado -->
      <form action="empleado_inicio.php" method="GET">
        <div class="form-group">
          <label class="form-label" for="empleado_id">IDENTIFICADOR DE EMPLEADO</label>
          <input type="text" id="empleado_id" name="empleado_id" class="form-input" placeholder="" autocomplete="off">
        </div>

        <div class="form-group">
          <label class="form-label" for="password">CONTRASEÑA</label>
          <input type="password" id="password" name="password" class="form-input" placeholder="" autocomplete="off">
        </div>

        <div class="form-group">
          <label class="form-label" for="turno">TURNO ASIGNADO</label>
          <input type="text" id="turno" name="turno" class="form-input" placeholder="" autocomplete="off">
        </div>

        <button type="submit" class="btn-brown">
          INICIAR SESIÓN &rarr;]
        </button>
      </form>

      <!-- Enlaces de navegación rápida entre roles -->
      <div class="login-role-links">
        <a href="empleado_inicio.php">Entrar como Empleado (Turno Matutino) &rarr;</a>
        <a href="admin_dashboard.php">Entrar como Administrador General &rarr;</a>
      </div>
    </div>
  </main>

  <script src="js/main.js"></script>
</body>
</html>
