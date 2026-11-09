<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generar Nuevo Reporte (Modal) - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body style="position: relative; overflow: hidden;">

  <!-- Fondo: Centro de Reportes atenuado idéntico a la captura de la pág 12 -->
  <header class="topbar" style="filter: brightness(0.6);">
    <div class="topbar-left">
      <span class="topbar-title">Generar reporte</span>
    </div>
    <div class="topbar-right">
      <span class="topbar-nav-link active">Administrador General</span>
      <a href="admin_reportes.php" class="topbar-nav-link">Cerrar Modal [✕]</a>
    </div>
  </header>

  <div class="app-layout" style="filter: brightness(0.5); pointer-events: none;">
    <aside class="sidebar">
      <div class="sidebar-brand">WEIRDO COMICS</div>
      <ul class="sidebar-menu">
        <li><a href="admin_dashboard.php" class="sidebar-link active">DASHBOARD</a></li>
      </ul>
    </aside>
    <main class="main-viewport">
      <h1 class="section-title">CENTRO DE REPORTES</h1>
    </main>
  </div>

  <!-- Modal Flotante Centrado -->
  <div class="modal-overlay">
    <div class="modal-dialog">
      <div class="modal-header">
        <h2 class="modal-title">GENERAR NUEVO REPORTE</h2>
        <p class="modal-subtitle">Configure los parámetros para crear un nuevo reporte.</p>
      </div>

      <!-- Formulario con navegación de regreso a admin_reportes.php -->
      <form action="admin_reportes.php" method="GET">
        <!-- 1. Tipo de reporte -->
        <div class="modal-section">
          <span class="modal-section-title">TIPO DE REPORTE</span>
          <div class="modal-report-types-grid">
            <div class="modal-type-card selected">
              <div class="modal-type-card-title">REPORTE DE VENTAS</div>
              <div class="modal-type-card-desc">Facturas, totales, ventas por cajero y métodos de pago registrados.</div>
            </div>
            <div class="modal-type-card">
              <div class="modal-type-card-title">REPORTE DE INVENTARIO</div>
              <div class="modal-type-card-desc">Valuación total del catálogo, alertas de stock de artículos y cómics.</div>
            </div>
            <div class="modal-type-card">
              <div class="modal-type-card-title">REPORTE DE PEDIDOS A PROVEEDORES</div>
              <div class="modal-type-card-desc">Órdenes de compra liquidadas, gasto acumulado y tiempo promedio de entrega.</div>
            </div>
          </div>
        </div>

        <!-- 2. Periodo y rango de fechas -->
        <div class="modal-section">
          <span class="modal-section-title">PERIODO Y RANGO DE FECHAS</span>
          <div class="modal-form-row">
            <div>
              <label class="modal-input-label">Rango Preestablecido</label>
              <select class="modal-input">
                <option>Últimos 30 días</option>
                <option>Últimos 7 días</option>
                <option>Mes Actual</option>
              </select>
            </div>
            <div>
              <label class="modal-input-label">Fecha de Inicio</label>
              <input type="date" class="modal-input" value="2026-02-01">
            </div>
            <div>
              <label class="modal-input-label">Fecha de Fin</label>
              <input type="date" class="modal-input" value="2026-02-24">
            </div>
          </div>
        </div>

        <!-- 3. Punto de venta -->
        <div class="modal-section">
          <span class="modal-section-title">PUNTO DE VENTA</span>
          <div class="modal-form-row-2">
            <div>
              <label class="modal-input-label">Puntos de Venta / Sucursal</label>
              <select class="modal-input">
                <option>Todas las Sucursales</option>
                <option>Sucursal Roma Norte</option>
                <option>Sucursal Centro</option>
              </select>
            </div>
            <div>
              <label class="modal-input-label">Categoría del catálogo</label>
              <select class="modal-input">
                <option>Todas las Categorías</option>
                <option>Cómics y Mangas</option>
                <option>Artículos y Coleccionables</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Botón de acción con navegación a la vista de reportes -->
        <div class="modal-footer" style="display: flex; flex-direction: column; gap: 8px;">
          <button type="submit" class="btn-magenta">
            GENERAR Y VISUALIZAR REPORTE
          </button>
          <a href="admin_reportes.php" style="text-align: center; color: var(--text-muted); font-size: 12px; text-decoration: none; padding: 4px;">
            Cancelar y volver a reportes
          </a>
        </div>
      </form>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
