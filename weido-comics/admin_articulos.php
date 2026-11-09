<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Artículos Relacionados - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Gestión de artículos</span>
    </div>
  </header>

  <div class="app-layout">
    <!-- Barra lateral -->
    <aside class="sidebar">
      <div class="sidebar-brand">WEIRDO COMICS</div>
      <ul class="sidebar-menu">
        <li>
          <a href="admin_dashboard.php" class="sidebar-link">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg>
            </span>
            DASHBOARD
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
          <a href="admin_articulos.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
              </svg>
            </span>
            Artículos Relacionados
            <span class="sidebar-arrow">&rarr;</span>
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

      <!-- Cabecera con botón de acción -->
      <div class="header-with-action">
        <div>
          <h1 class="section-title">GESTIÓN DE ARTÍCULOS RELACIONADOS</h1>
          <p class="section-subtitle" style="margin-bottom: 0;">Control de artículos relacionados.</p>
        </div>
        <button type="button" class="btn-magenta">
          + REGISTRAR ARTÍCULO
        </button>
      </div>

      <!-- Barra de filtros -->
      <div class="filter-bar" style="margin-top: 20px;">
        <div class="search-input-wrapper" style="max-width: 280px;">
          <input type="text" class="search-input" placeholder="Buscar por título...">
          <span class="search-clear-icon">&times;</span>
        </div>

        <div>
          <select class="custom-select">
            <option>Todas las Categorías</option>
            <option>Figuras Coleccionables</option>
            <option>Fundas y Protectores</option>
            <option>Pósters e Ilustraciones</option>
          </select>
        </div>
      </div>

      <!-- Tabla de artículos -->
      <div class="table-wrapper">
        <table class="custom-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>ARTÍCULO Y FABRICANTE</th>
              <th>EDITORIAL</th>
              <th>ESTADO STOCK</th>
              <th>PROVEEDOR</th>
              <th>PRECIO</th>
              <th class="td-right">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-disponible">Disponible</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-stock-bajo">Stock Bajo</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-disponible">Disponible</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-disponible">Disponible</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-agotado">Agotado</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-disponible">Disponible</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-disponible">Disponible</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-stock-bajo">Stock Bajo</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-stock-bajo">Stock Bajo</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-disponible">Disponible</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
              </td>
            </tr>
            <tr>
              <td class="td-id">#12345</td>
              <td>Marvel SpiderMan #800</td>
              <td>Marvel Cómics</td>
              <td><span class="status-badge-agotado">Agotado</span></td>
              <td>Fantastic Cómics</td>
              <td>$580.00 MXN</td>
              <td class="td-right">
                <button type="button" class="btn-sm-action">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                  Editar
                </button>
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
