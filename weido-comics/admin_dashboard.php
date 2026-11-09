<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Administrador - Weirdo Comics</title>
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
    <!-- Barra lateral de Administrador -->
    <aside class="sidebar">
      <div class="sidebar-brand">WEIRDO COMICS</div>
      <ul class="sidebar-menu">
        <li>
          <a href="admin_dashboard.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg>
            </span>
            DASHBOARD
            <span class="sidebar-arrow">&rarr;</span>
          </a>
        </li>
        <li>
          <a href="admin_comics.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path>
              </svg>
            </span>
            Gestión de Cómics
          </a>
        </li>
        <li>
          <a href="admin_articulos.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
              </svg>
            </span>
            Artículos Relacionados
          </a>
        </li>
        <li>
          <a href="admin_proveedores.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              </svg>
            </span>
            Proveedores
          </a>
        </li>
        <li>
          <a href="admin_usuarios.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </span>
            Usuarios y Roles
          </a>
        </li>
        <li>
          <a href="admin_reportes.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
              </svg>
            </span>
            Reportes Operativos
          </a>
        </li>
      </ul>

      <div class="sidebar-footer">
        <a href="empleado_inicio.php" class="sidebar-switch-btn">Acceso Empleado &rarr;</a>
        <a href="login.php" class="sidebar-switch-btn">Cerrar Sesión</a>
      </div>
    </aside>

    <!-- Área principal -->
    <main class="main-viewport">
      <div class="section-badge-admin">ADMINISTRADOR GENERAL</div>
      <div class="kicker-subtitle">PANEL DE CONTROL OPERATIVO</div>
      <h1 class="section-title">BIENVENID@, USUARIO</h1>
      <p class="section-subtitle">Panel de administración de procesos internos de inventario, proveedores, pedidos y ventas de mostrador.</p>

      <!-- Fila de métricas KPI -->
      <div class="kpi-row">
        <div class="kpi-item">
          <span class="kpi-label">VENTAS TOTALES DEL MES</span>
          <div class="kpi-value-green">$18,650 <span>MXN</span></div>
        </div>
        <div class="kpi-item">
          <span class="kpi-label">PEDIDOS A PROVEEDORES</span>
          <div class="kpi-value-number">8 <span>Órdenes activas</span></div>
        </div>
        <div class="kpi-item">
          <span class="kpi-label">CATÁLOGO</span>
          <div class="kpi-value-green">$1,420 <span>Registros</span></div>
        </div>
      </div>

      <!-- Módulos de Gestión con enlaces interactivos -->
      <h2 class="section-subheading">MÓDULOS DE GESTIÓN</h2>
      <div class="modules-grid">
        <a href="admin_comics.php" class="module-card bg-module-magenta">
          <div class="module-card-title">Gestión de Cómics</div>
          <div class="module-card-sub">870 títulos</div>
        </a>
        <a href="admin_articulos.php" class="module-card bg-module-teal">
          <div class="module-card-title">Artículos Relacionados</div>
          <div class="module-card-sub">421 Items</div>
        </a>
        <a href="admin_proveedores.php" class="module-card bg-module-plum">
          <div class="module-card-title">Proveedores</div>
          <div class="module-card-sub">16 registrados</div>
        </a>
        <a href="admin_reportes.php" class="module-card bg-module-cyan">
          <div class="module-card-title">Pedidos Proveedores</div>
          <div class="module-card-sub">9 activos</div>
        </a>
        <a href="admin_usuarios.php" class="module-card bg-module-berry">
          <div class="module-card-title">Usuarios y Roles</div>
          <div class="module-card-sub">10 usuarios</div>
        </a>
        <a href="admin_reportes.php" class="module-card bg-module-slate">
          <div class="module-card-title">Reportes Operativos</div>
          <div class="module-card-sub">Informes del mes</div>
        </a>
      </div>

      <!-- Control de Stock Crítico -->
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 8px;">
        <div>
          <h2 class="section-subheading" style="margin-bottom: 2px;">CONTROL DE STOCK CRÍTICO</h2>
          <p style="font-size: 11px; color: var(--text-muted);">Productos cuyo inventario actual está por debajo del umbral mínimo de seguridad.</p>
        </div>
        <div class="search-input-wrapper" style="max-width: 240px;">
          <input type="text" class="search-input" placeholder="Filtrar por código o nombre...">
          <span class="search-clear-icon">&times;</span>
        </div>
      </div>

      <div class="table-wrapper">
        <table class="custom-table">
          <thead>
            <tr>
              <th>CÓDIGO</th>
              <th>CATEGORÍA</th>
              <th>PRODUCTO</th>
              <th class="td-center">STOCK ACTUAL</th>
              <th class="td-center">UMBRAL MÍNIMO</th>
              <th class="td-right">ACCIÓN RÁPIDA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td-id">#12345</td>
              <td>CÓMIC</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td class="td-center" style="color: #b91c1c; font-weight: 700;">1</td>
              <td class="td-center">5</td>
              <td class="td-right">
                <a href="admin_reportes.php" class="btn-sm-action" style="text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                  </svg>
                  Generar Pedido
                </a>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>ARTÍCULO</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td class="td-center" style="color: #b45309; font-weight: 700;">2</td>
              <td class="td-center">10</td>
              <td class="td-right">
                <a href="admin_reportes.php" class="btn-sm-action" style="text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                  </svg>
                  Generar Pedido
                </a>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>CÓMIC</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td class="td-center" style="color: #b91c1c; font-weight: 700;">0</td>
              <td class="td-center">5</td>
              <td class="td-right">
                <a href="admin_reportes.php" class="btn-sm-action" style="text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                  </svg>
                  Generar Pedido
                </a>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>CÓMIC</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td class="td-center" style="color: #b45309; font-weight: 700;">3</td>
              <td class="td-center">8</td>
              <td class="td-right">
                <a href="admin_reportes.php" class="btn-sm-action" style="text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                  </svg>
                  Generar Pedido
                </a>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>17:10</td>
              <td>3 Cómics de Marvel SpiderMan</td>
              <td class="td-center">Tarjeta</td>
              <td class="td-center">-</td>
              <td class="td-right">
                <a href="admin_reportes.php" class="btn-sm-action" style="text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                  </svg>
                  Generar Pedido
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
