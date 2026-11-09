<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Empleado - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Inicio</span>
    </div>
  </header>

  <div class="app-layout">
    <!-- Barra lateral -->
    <aside class="sidebar">
      <div class="sidebar-brand">WEIRDO COMICS</div>
      <ul class="sidebar-menu">
        <li>
          <a href="empleado_inicio.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg>
            </span>
            INICIO
            <span class="sidebar-arrow">&rarr;</span>
          </a>
        </li>
        <li>
          <a href="ventas_mostrador.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
            </span>
            VENTA MOSTRADOR
          </a>
        </li>
        <li>
          <a href="catalogo.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m7.5 4.27 9 5.15"></path>
                <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
              </svg>
            </span>
            CATÁLOGO E INVENTARIO
          </a>
        </li>
        <li>
          <a href="tickets.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
              </svg>
            </span>
            EMISIÓN DE TICKETS
          </a>
        </li>
      </ul>

      <div class="sidebar-footer">
        <a href="admin_dashboard.php" class="sidebar-switch-btn">Acceso Administrador &rarr;</a>
        <a href="login.php" class="sidebar-switch-btn">Cerrar Sesión</a>
      </div>
    </aside>

    <!-- Área principal -->
    <main class="main-viewport">
      <div class="section-badge-turn">TURNO MATUTINO</div>
      <h1 class="section-title">BIENVENID@, USUARIO</h1>
      <p class="section-subtitle">Panel de administración de procesos internos de inventario, proveedores, pedidos y ventas de mostrador.</p>

      <!-- Fila de KPIs -->
      <div class="kpi-row">
        <div class="kpi-item">
          <span class="kpi-label">VENTAS TOTALES DEL TURNO</span>
          <div class="kpi-value-green">$18,650 <span>MXN</span></div>
        </div>
        <div class="kpi-item">
          <span class="kpi-label">TICKETS EMITIDOS</span>
          <div class="kpi-value-number">48 <span>En curso</span></div>
        </div>
      </div>

      <!-- Accesos operativos con enlaces de navegación -->
      <h2 class="section-subheading">ACCESOS OPERATIVOS</h2>
      <div class="access-cards-grid">
        <a href="ventas_mostrador.php" class="access-card-dark">
          <div class="access-card-title">
            <span>ACCEDER A CAJA</span>
            <span>&rarr;</span>
          </div>
          <span class="access-card-desc">Ventas en Mostrador, Escaneo y Cobro Rápido</span>
        </a>

        <a href="catalogo.php" class="access-card-light">
          <div class="access-card-title">
            <span>CONSULTAR CATÁLOGO</span>
            <span>&rarr;</span>
          </div>
          <span class="access-card-desc">Búsqueda de Existencias y Stock</span>
        </a>
      </div>

      <!-- Resumen de ventas del turno -->
      <h2 class="section-subheading">RESUMEN DE VENTAS DEL TURNO</h2>
      <p class="section-subtitle" style="margin-bottom: 12px;">30 transacciones procesadas hoy a partir de las 15:00 hrs</p>

      <div class="table-wrapper">
        <table class="custom-table">
          <thead>
            <tr>
              <th>TICKET</th>
              <th>HORA</th>
              <th>DESCRIPCIÓN / PRODUCTOS</th>
              <th>MÉTODO DE PAGO</th>
              <th class="td-right">TOTAL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td-id">#12345</td>
              <td>17:10</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td>Tarjeta</td>
              <td class="td-right">$580.00 MXN</td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>17:10</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td>Tarjeta</td>
              <td class="td-right">$580.00 MXN</td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>17:10</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td>Tarjeta</td>
              <td class="td-right">$580.00 MXN</td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>17:10</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td>Tarjeta</td>
              <td class="td-right">$580.00 MXN</td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>17:10</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td>Tarjeta</td>
              <td class="td-right">$580.00 MXN</td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>17:10</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td>Tarjeta</td>
              <td class="td-right">$580.00 MXN</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
