<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de Catálogo e Inventario - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Catálogo</span>
    </div>
  </header>

  <div class="app-layout">
    <!-- Barra lateral -->
    <aside class="sidebar">
      <div class="sidebar-brand">WEIRDO COMICS</div>
      <ul class="sidebar-menu">
        <li>
          <a href="empleado_inicio.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg>
            </span>
            INICIO
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
          <a href="catalogo.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m7.5 4.27 9 5.15"></path>
                <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
              </svg>
            </span>
            CATÁLOGO E INVENTARIO
            <span class="sidebar-arrow">&rarr;</span>
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
      <h1 class="section-title">CONSULTA DE CATÁLOGO E INVENTARIO</h1>
      <p class="section-subtitle">Catálogo general y control de existencias.</p>

      <!-- Barra de filtros superiores -->
      <div class="filter-bar">
        <div class="search-input-wrapper">
          <input type="text" class="search-input" placeholder="Buscar por título...">
          <span class="search-clear-icon">&times;</span>
        </div>

        <div class="filter-tabs">
          <button type="button" class="tab-btn active">TODOS</button>
          <button type="button" class="tab-btn">CÓMICS</button>
          <button type="button" class="tab-btn">ARTÍCULOS Y ACCESORIOS</button>
        </div>
      </div>

      <!-- Chips de estado -->
      <div class="status-chips-bar">
        <span class="chip-status">CON EXISTENCIAS</span>
        <span class="chip-status">STOCK BAJO (&lt;5)</span>
        <span class="chip-status">AGOTADOS</span>
        <span class="chip-status-price">PRECIO PROMEDIO: $280.00 MXN</span>
      </div>

      <!-- Tabla de Catálogo -->
      <div class="table-wrapper">
        <table class="custom-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>CATEGORÍA</th>
              <th>PRODUCTO</th>
              <th>STOCK DISPONIBLE</th>
              <th class="td-right">PRECIO UNITARIO</th>
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
