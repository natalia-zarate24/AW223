<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Ventas de Mostrador - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Ventas de mostrador</span>
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
          <a href="ventas_mostrador.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
            </span>
            VENTA MOSTRADOR
            <span class="sidebar-arrow">&rarr;</span>
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
      <h1 class="section-title">REGISTRAR VENTAS DE MOSTRADOR</h1>
      <p class="section-subtitle">Catálogo general y control de existencias.</p>

      <div class="pos-layout-grid">
        <!-- Columna Izquierda: Cuadrícula de Productos -->
        <div>
          <!-- Filtros de búsqueda -->
          <div class="filter-bar">
            <div class="search-input-wrapper" style="max-width: 280px;">
              <input type="text" class="search-input" placeholder="Buscar por nombre...">
              <span class="search-clear-icon">&times;</span>
            </div>

            <div class="filter-tabs">
              <button type="button" class="tab-btn active">TODOS</button>
              <button type="button" class="tab-btn">CÓMICS</button>
              <button type="button" class="tab-btn">ARTÍCULOS Y ACCESORIOS</button>
            </div>
          </div>

          <!-- Grid de tarjetas de cómics -->
          <div class="pos-products-grid">
            <!-- Producto 1 -->
            <div class="pos-product-card">
              <div class="pos-card-header">
                <span>COMICS</span>
                <span>#123456</span>
              </div>
              <div class="pos-card-title">Plants Vs. Zombies</div>
              <div class="pos-card-edition">Volumen 1: Lawnmageddon</div>
              <div class="pos-card-price-row">
                <span style="color: var(--text-muted);">PRECIO:</span>
                <span style="font-weight: 700; color: #111827;">381.59 MXN</span>
              </div>
              <div class="pos-card-stock">STOCK ACTUAL: 14 unidades</div>
              <button type="button" class="btn-magenta" style="margin-top: auto; padding: 7px;">AGREGAR</button>
            </div>

            <!-- Producto 2 -->
            <div class="pos-product-card">
              <div class="pos-card-header">
                <span>COMICS</span>
                <span>#123456</span>
              </div>
              <div class="pos-card-title">Invencible</div>
              <div class="pos-card-edition">Volumen 1: Nueva Edición</div>
              <div class="pos-card-price-row">
                <span style="color: var(--text-muted);">PRECIO:</span>
                <span style="font-weight: 700; color: #111827;">381.59 MXN</span>
              </div>
              <div class="pos-card-stock">STOCK ACTUAL: 14 unidades</div>
              <button type="button" class="btn-magenta" style="margin-top: auto; padding: 7px;">AGREGAR</button>
            </div>

            <!-- Producto 3 -->
            <div class="pos-product-card">
              <div class="pos-card-header">
                <span>COMICS</span>
                <span>#123456</span>
              </div>
              <div class="pos-card-title">The Batman</div>
              <div class="pos-card-edition">The Batman Who Laughs</div>
              <div class="pos-card-price-row">
                <span style="color: var(--text-muted);">PRECIO:</span>
                <span style="font-weight: 700; color: #111827;">381.59 MXN</span>
              </div>
              <div class="pos-card-stock">STOCK ACTUAL: 14 unidades</div>
              <button type="button" class="btn-magenta" style="margin-top: auto; padding: 7px;">AGREGAR</button>
            </div>

            <!-- Fila 2: Producto 4 -->
            <div class="pos-product-card">
              <div class="pos-card-header">
                <span>COMICS</span>
                <span>#123456</span>
              </div>
              <div class="pos-card-title">Plants Vs. Zombies</div>
              <div class="pos-card-edition">Volumen 1: Lawnmageddon</div>
              <div class="pos-card-price-row">
                <span style="color: var(--text-muted);">PRECIO:</span>
                <span style="font-weight: 700; color: #111827;">381.59 MXN</span>
              </div>
              <div class="pos-card-stock">STOCK ACTUAL: 14 unidades</div>
              <button type="button" class="btn-magenta" style="margin-top: auto; padding: 7px;">AGREGAR</button>
            </div>

            <!-- Fila 2: Producto 5 -->
            <div class="pos-product-card">
              <div class="pos-card-header">
                <span>COMICS</span>
                <span>#123456</span>
              </div>
              <div class="pos-card-title">Plants Vs. Zombies</div>
              <div class="pos-card-edition">Volumen 1: Lawnmageddon</div>
              <div class="pos-card-price-row">
                <span style="color: var(--text-muted);">PRECIO:</span>
                <span style="font-weight: 700; color: #111827;">381.59 MXN</span>
              </div>
              <div class="pos-card-stock">STOCK ACTUAL: 14 unidades</div>
              <button type="button" class="btn-magenta" style="margin-top: auto; padding: 7px;">AGREGAR</button>
            </div>

            <!-- Fila 2: Producto 6 -->
            <div class="pos-product-card">
              <div class="pos-card-header">
                <span>COMICS</span>
                <span>#123456</span>
              </div>
              <div class="pos-card-title">The Batman</div>
              <div class="pos-card-edition">The Batman Who Laughs</div>
              <div class="pos-card-price-row">
                <span style="color: var(--text-muted);">PRECIO:</span>
                <span style="font-weight: 700; color: #111827;">381.59 MXN</span>
              </div>
              <div class="pos-card-stock">STOCK ACTUAL: 14 unidades</div>
              <button type="button" class="btn-magenta" style="margin-top: auto; padding: 7px;">AGREGAR</button>
            </div>
          </div>
        </div>

        <!-- Columna Derecha: Panel de Venta Actual con navegación -->
        <aside class="pos-cart-panel">
          <div class="cart-title">VENTA ACTUAL</div>

          <!-- Estado vacío -->
          <div class="cart-empty-state">
            <div class="cart-empty-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="1.8">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
            </div>
            <div class="cart-empty-text">
              No hay productos en la venta actual.<br>
              Selecciona productos a la izquierda.
            </div>
          </div>

          <!-- Selector de descuento -->
          <div class="cart-discount-section">
            <span class="cart-discount-label">¿DESEAS AGREGAR UN DESCUENTO?</span>
            <div class="discount-pills">
              <button type="button" class="discount-pill active">0%</button>
              <button type="button" class="discount-pill">5%</button>
              <button type="button" class="discount-pill">10%</button>
              <button type="button" class="discount-pill">15%</button>
              <button type="button" class="discount-pill">20%</button>
            </div>
          </div>

          <!-- Totales -->
          <div class="cart-totals">
            <div class="cart-total-row">
              <span>Subtotal:</span>
              <span style="font-weight: 600;">$0.00 MXN</span>
            </div>
            <div class="cart-total-row">
              <span>Descuento:</span>
              <span style="color: #ef4444; font-weight: 600;">-0.00 MXN</span>
            </div>
            <div class="cart-grand-total">
              <span>TOTAL</span>
              <span class="amount">$0.00 <sub>MXN</sub></span>
            </div>
          </div>

          <!-- Métodos de pago -->
          <div class="cart-payment-methods">
            <button type="button" class="payment-btn cash">EFECTIVO</button>
            <button type="button" class="payment-btn card">TARJETA</button>
          </div>

          <!-- Acciones de venta con navegación a tickets o regreso al inicio -->
          <a href="tickets.php" class="btn-magenta" style="display: block; text-align: center; text-decoration: none; width: 100%; padding: 12px;">
            REGISTRAR VENTA
          </a>
          <a href="empleado_inicio.php" class="btn-cancel-link" style="display: block; text-align: center; text-decoration: none;">
            CANCELAR VENTA
          </a>
        </aside>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
