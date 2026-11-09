<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centro de Reportes - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Gestión de pedidos</span>
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
          <a href="admin_reportes.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
              </svg>
            </span>
            Reportes Operativos
            <span class="sidebar-arrow">&rarr;</span>
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
      <h1 class="section-title">CENTRO DE REPORTES</h1>
      <p class="section-subtitle">Control de datos de ventas, existencias de inventario y pedidos a proveedores.</p>

      <!-- Barra de filtros temporales -->
      <div class="filter-bar" style="margin-bottom: 24px;">
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
          <select class="custom-select">
            <option>Últimos 30 días</option>
            <option>Este Mes</option>
            <option>Año 2026</option>
          </select>
          <select class="custom-select">
            <option>Semanal</option>
            <option>Diario</option>
            <option>Mensual</option>
          </select>
          <select class="custom-select">
            <option>Sucursal Centro</option>
            <option>Sucursal Roma Norte</option>
            <option>Todas las Sucursales</option>
          </select>
        </div>

        <button type="button" class="btn-magenta">
          ACTUALIZAR DATOS
        </button>
      </div>

      <!-- Tarjetas de pestañas de reporte -->
      <div class="report-tabs-bar">
        <div class="report-tab-card active">
          <div class="report-tab-title">REPORTE DE VENTAS</div>
          <div class="report-tab-desc">Facturas, totales, ventas por cajero y métodos de pago registrados.</div>
        </div>
        <div class="report-tab-card">
          <div class="report-tab-title">REPORTE DE INVENTARIO</div>
          <div class="report-tab-desc">Valuación total del catálogo, alertas de stock de artículos y cómics.</div>
        </div>
        <div class="report-tab-card">
          <div class="report-tab-title">REPORTE DE PEDIDOS A PROVEEDORES</div>
          <div class="report-tab-desc">Órdenes de compra liquidadas, gasto acumulado y tiempo promedio de entrega.</div>
        </div>
      </div>

      <!-- Fila de Gráficos -->
      <div class="charts-row-grid">
        <!-- Gráfico 1: Ingresos semanales -->
        <div class="chart-card">
          <div class="chart-title">INGRESOS SEMANALES DEL PERIODO</div>
          <div class="vertical-bars-chart">
            <!-- Semana 1 -->
            <div class="bar-group">
              <div class="bar-teal" style="height: 65%;"></div>
              <div class="bar-magenta" style="height: 45%;"></div>
            </div>
            <!-- Semana 2 -->
            <div class="bar-group">
              <div class="bar-teal" style="height: 85%;"></div>
              <div class="bar-magenta" style="height: 90%;"></div>
            </div>
            <!-- Semana 3 -->
            <div class="bar-group">
              <div class="bar-teal" style="height: 75%;"></div>
              <div class="bar-magenta" style="height: 80%;"></div>
            </div>
            <!-- Semana 4 -->
            <div class="bar-group">
              <div class="bar-teal" style="height: 50%;"></div>
              <div class="bar-magenta" style="height: 40%;"></div>
            </div>
          </div>
          <div class="chart-labels-x">
            <span>Semana 1</span>
            <span>Semana 2</span>
            <span>Semana 3</span>
            <span>Semana 4</span>
          </div>
        </div>

        <!-- Gráfico 2: Ventas por categoría -->
        <div class="chart-card" style="display: flex; flex-direction: column;">
          <div class="chart-title">VENTAS POR CATEGORÍA</div>
          <div class="horizontal-bars-container">
            <div class="hbar-item">
              <div class="hbar-header">
                <span>Programación y Software</span>
                <span style="color: var(--text-muted); font-size: 10px;">120 items</span>
              </div>
              <div class="hbar-track">
                <div class="hbar-fill hbar-fill-teal" style="width: 78%;"></div>
              </div>
            </div>

            <div class="hbar-item">
              <div class="hbar-header">
                <span>Cómics</span>
                <span style="color: var(--text-muted); font-size: 10px;">77 items</span>
              </div>
              <div class="hbar-track">
                <div class="hbar-fill hbar-fill-magenta" style="width: 52%;"></div>
              </div>
            </div>

            <div class="hbar-item">
              <div class="hbar-header">
                <span>Matemáticas</span>
                <span style="color: var(--text-muted); font-size: 10px;">15 items</span>
              </div>
              <div class="hbar-track">
                <div class="hbar-fill hbar-fill-green" style="width: 25%;"></div>
              </div>
            </div>
          </div>

          <!-- Botón de Crear Nuevo Reporte con navegación hacia modal_reporte.php -->
          <a href="modal_reporte.php" class="btn-magenta" style="display: block; text-align: center; text-decoration: none; margin-top: auto; padding: 10px; width: 100%;">
            + CREAR NUEVO REPORTE
          </a>
        </div>
      </div>

      <!-- Desglose detallado de ventas por periodo -->
      <h2 class="section-subheading">DESGLOSE DETALLADO DE VENTAS POR PERIODO</h2>

      <div class="table-wrapper">
        <table class="custom-table">
          <thead>
            <tr>
              <th>FOLIO</th>
              <th>FECHA Y HORA</th>
              <th>CATEGORÍA</th>
              <th class="td-center">UNIDADES</th>
              <th>VENDEDOR / CAJA</th>
              <th class="td-right">TOTAL</th>
              <th class="td-right">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td-id">#12345</td>
              <td>24 Febrero, 10:39 hrs</td>
              <td>Cómic Gráfico</td>
              <td class="td-center">8</td>
              <td>Caja 01 (Carlos A.)</td>
              <td class="td-right" style="font-weight: 700;">$1,600.00</td>
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
              <td>24 Febrero, 10:39 hrs</td>
              <td>Cómic Gráfico</td>
              <td class="td-center">8</td>
              <td>Caja 01 (Carlos A.)</td>
              <td class="td-right" style="font-weight: 700;">$1,600.00</td>
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
              <td>24 Febrero, 10:39 hrs</td>
              <td>Cómic Gráfico</td>
              <td class="td-center">8</td>
              <td>Caja 01 (Carlos A.)</td>
              <td class="td-right" style="font-weight: 700;">$1,600.00</td>
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
              <td>24 Febrero, 10:39 hrs</td>
              <td>Cómic Gráfico</td>
              <td class="td-center">8</td>
              <td>Caja 01 (Carlos A.)</td>
              <td class="td-right" style="font-weight: 700;">$1,600.00</td>
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
              <td>24 Febrero, 10:39 hrs</td>
              <td>Cómic Gráfico</td>
              <td class="td-center">8</td>
              <td>Caja 01 (Carlos A.)</td>
              <td class="td-right" style="font-weight: 700;">$1,600.00</td>
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
              <td>24 Febrero, 10:39 hrs</td>
              <td>Cómic Gráfico</td>
              <td class="td-center">8</td>
              <td>Caja 01 (Carlos A.)</td>
              <td class="td-right" style="font-weight: 700;">$1,600.00</td>
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
