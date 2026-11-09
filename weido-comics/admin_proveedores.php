<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Proveedores - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Gestión de proveedores</span>
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
          <a href="admin_proveedores.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              </svg>
            </span>
            Proveedores
            <span class="sidebar-arrow">&rarr;</span>
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
          <h1 class="section-title">GESTIÓN DE PROVEEDORES</h1>
          <p class="section-subtitle" style="margin-bottom: 0;">Control de artículos relacionados.</p>
        </div>
        <button type="button" class="btn-magenta">
          + REGISTRAR PROVEEDOR
        </button>
      </div>

      <!-- Barra de filtros -->
      <div class="filter-bar" style="margin-top: 20px;">
        <div class="search-input-wrapper" style="max-width: 280px;">
          <input type="text" class="search-input" placeholder="Buscar por filtro...">
          <span class="search-clear-icon">&times;</span>
        </div>

        <div>
          <select class="custom-select">
            <option>Todas las Categorías</option>
            <option>Distribuidores Nacionales</option>
            <option>Importadoras Directas</option>
            <option>Editoriales Independientes</option>
          </select>
        </div>
      </div>

      <!-- Tabla de Proveedores -->
      <div class="table-wrapper">
        <table class="custom-table">
          <thead>
            <tr>
              <th>EMPRESA</th>
              <th>CONTACTO COMERCIAL</th>
              <th>TIPO DE SUMINISTRO</th>
              <th>CONTACTO</th>
              <th class="td-right">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
              <td style="font-weight: 600; color: #111827;">Fantastic Cómics</td>
              <td>
                <div style="font-weight: 600; color: #111827;">Ricarda Montes</div>
                <div style="font-size: 11px; color: var(--text-muted);">Jefa de Distribución</div>
              </td>
              <td>Cómics Gringos</td>
              <td>
                <div>+52 435 234 382</div>
                <div style="font-size: 11px; color: #2563eb;">fantastic@comics.mx</div>
              </td>
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
