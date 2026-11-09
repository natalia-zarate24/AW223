<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emisión de Comprobantes de Venta - Weirdo Comics</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Barra superior -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-title">Tickets</span>
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
          <a href="tickets.php" class="sidebar-link active">
            <span class="sidebar-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
              </svg>
            </span>
            EMISIÓN DE TICKETS
            <span class="sidebar-arrow">&rarr;</span>
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
      <h1 class="section-title">EMISIÓN DE COMPROBANTES DE VENTA</h1>
      <p class="section-subtitle">Gestión y reimpresión de comprobantes fiscales de caja.</p>

      <div class="tickets-grid-layout">
        <!-- Columna Izquierda: Registro histórico -->
        <div class="ticket-history-column">
          <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 10px;">
            <h2 class="section-subheading" style="margin-bottom: 0;">REGISTRO HISTÓRICO</h2>
            <span style="font-size: 11px; color: var(--text-muted); font-weight: 600;">24 Registros Hoy</span>
          </div>

          <!-- Buscador -->
          <div class="search-input-wrapper" style="max-width: 100%; margin-bottom: 14px;">
            <input type="text" class="search-input" placeholder="Buscar por folio...">
            <span class="search-clear-icon">&times;</span>
          </div>

          <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: var(--text-muted); margin-bottom: 10px;">
            TICKETS EMITIDOS RECIENTEMENTE
          </div>

          <!-- Lista de tickets -->
          <div class="ticket-item-card">
            <div>
              <div class="ticket-id">#12345</div>
              <div class="ticket-meta">24/10/2026 - 17:10</div>
              <div class="ticket-items-count">3 Artículos (Marvel DC)</div>
            </div>
            <div class="ticket-price-right">
              <div class="ticket-price-amount">1,485.00 MXN</div>
              <span class="ticket-badge-cash">EFECTIVO</span>
              <span class="ticket-action-reprint">[REIMPRIMIR]</span>
            </div>
          </div>

          <div class="ticket-item-card">
            <div>
              <div class="ticket-id">#12345</div>
              <div class="ticket-meta">24/10/2026 - 17:10</div>
              <div class="ticket-items-count">3 Artículos (Marvel DC)</div>
            </div>
            <div class="ticket-price-right">
              <div class="ticket-price-amount">1,485.00 MXN</div>
              <span class="ticket-badge-cash">EFECTIVO</span>
              <span class="ticket-action-reprint">[REIMPRIMIR]</span>
            </div>
          </div>

          <div class="ticket-item-card">
            <div>
              <div class="ticket-id">#12345</div>
              <div class="ticket-meta">24/10/2026 - 17:10</div>
              <div class="ticket-items-count">3 Artículos (Marvel DC)</div>
            </div>
            <div class="ticket-price-right">
              <div class="ticket-price-amount">1,485.00 MXN</div>
              <span class="ticket-badge-cash">EFECTIVO</span>
              <span class="ticket-action-reprint">[REIMPRIMIR]</span>
            </div>
          </div>

          <div class="ticket-item-card">
            <div>
              <div class="ticket-id">#12345</div>
              <div class="ticket-meta">24/10/2026 - 17:10</div>
              <div class="ticket-items-count">3 Artículos (Marvel DC)</div>
            </div>
            <div class="ticket-price-right">
              <div class="ticket-price-amount">1,485.00 MXN</div>
              <span class="ticket-badge-cash">EFECTIVO</span>
              <span class="ticket-action-reprint">[REIMPRIMIR]</span>
            </div>
          </div>

          <!-- Botón con navegación a nueva venta en mostrador -->
          <a href="ventas_mostrador.php" class="btn-magenta" style="display: block; text-align: center; text-decoration: none; width: 100%; margin-top: 14px; padding: 12px;">
            + NUEVO COMPROBANTE
          </a>
        </div>

        <!-- Columna Derecha: Vista previa de Ticket Térmico -->
        <div style="display: flex; flex-direction: column;">
          <h2 class="section-subheading" style="margin-bottom: 12px;">VISTA PREVIA DE TICKET</h2>
          <div class="ticket-preview-box">
            <div class="thermal-paper">
              <div class="thermal-header">
                <div class="thermal-store-name">WEIRDO COMICS</div>
                <div class="thermal-store-sub">LIBRERÍA ESPECIALIZADA & COLECCIONABLES</div>
                <div style="font-size: 9px; color: #4b5563;">RFC: WCO-100412-AB2</div>
                <div style="font-size: 9px; color: #4b5563;">Av. Insurgentes Sur 421, Col. Roma, CDMX</div>
                <div style="font-size: 9px; color: #4b5563;">Tel: (55) 5420-9182</div>
              </div>

              <div class="thermal-row">
                <span>FOLIO FISCAL:</span>
                <span>WL-2022-8942</span>
              </div>
              <div class="thermal-row">
                <span>FECHA / HORA:</span>
                <span>24/10/2026 18:38:15</span>
              </div>
              <div class="thermal-row">
                <span>CAJERO:</span>
                <span>Karen J. (POS-01)</span>
              </div>
              <div class="thermal-row">
                <span>TIPO DE COMPROBANTE:</span>
                <span>TICKET SIMPLIFICADO</span>
              </div>

              <div class="thermal-divider"></div>

              <table class="thermal-table">
                <thead>
                  <tr>
                    <th>CONCEPTO / ARTÍCULO</th>
                    <th style="text-align: right;">TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="thermal-item-title">1x Amazing Spider-Man #300</div>
                      <div class="thermal-item-detail">ESTADO: VF (8.0) - MARVEL</div>
                    </td>
                    <td style="text-align: right; font-weight: 700;">$850.00</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="thermal-item-title">1x Batman: The Killing Joke 1st</div>
                      <div class="thermal-item-detail">ESTADO: NM (9.4) - DC COMICS</div>
                    </td>
                    <td style="text-align: right; font-weight: 700;">$485.00</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="thermal-item-title">1x Fundas Mylar 2 Mil (Pack 50)</div>
                      <div class="thermal-item-detail">ACCESORIOS CONSERVACIÓN</div>
                    </td>
                    <td style="text-align: right; font-weight: 700;">$150.00</td>
                  </tr>
                </tbody>
              </table>

              <div class="thermal-divider"></div>

              <div class="thermal-row">
                <span>SUBTOTAL:</span>
                <span>$1,280.17 MXN</span>
              </div>
              <div class="thermal-row">
                <span>IVA (16%):</span>
                <span>$204.83 MXN</span>
              </div>
              <div class="thermal-row thermal-total-line" style="margin-top: 4px;">
                <span>TOTAL A PAGAR:</span>
                <span>$1,485.00 MXN</span>
              </div>
              <div class="thermal-row" style="margin-top: 6px;">
                <span>FORMA DE PAGO:</span>
                <span>EFECTIVO</span>
              </div>
              <div class="thermal-row">
                <span>IMPORTE RECIBIDO:</span>
                <span>$1,500.00 MXN</span>
              </div>
              <div class="thermal-row">
                <span>CAMBIO DEVUELTO:</span>
                <span>$15.00 MXN</span>
              </div>

              <div class="thermal-barcode">
                <div class="barcode-stripes"></div>
                <div class="barcode-text">7509832489421</div>
              </div>

              <div class="thermal-footer-note">
                Conserve este comprobante para aclaraciones y devoluciones.<br>
                30 días hábiles en producto sin desprecinte.<br>
                ¡Gracias por apoyar a Weirdo Comics!
              </div>
            </div>

            <div class="ticket-actions-bar">
              <button type="button" class="btn-teal" style="flex: 1;">IMPRIMIR TICKET</button>
              <button type="button" class="btn-sage" style="flex: 1;">ENVIAR POR CORREO</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
