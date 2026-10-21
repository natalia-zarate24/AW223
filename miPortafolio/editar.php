<?php
require 'consulta_mensajes.php';

if (isset($_GET['id'])) {
    $idMensaje = $_GET['id'];
    $mensajeData = obtenerMensajePorId($idMensaje);

    if (!$mensajeData) {
        header('Location: admin.php');
        exit;
    }
} else {
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Administración - Editar Mensaje</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <h1>Zona Administración</h1>
        <p>Formulario para Editar</p>
    </header>

    <nav class="admin-nav">
        <a href="admin.php" title="Regresar a Zona Administración">
            <i class="fa-solid fa-rotate-left"></i>
        </a>
        <a href="index.html" title="Regresar al portafolio">
            <i class="fa-solid fa-house"></i>
        </a>
    </nav>

    <main>
        <section class="section-home">
            <div class="admin-card admin-card-small">
                <h2>Editar Mensaje</h2>
                
                <form action="actualizar_msj.php" method="POST" class="admin-form">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($mensajeData['id']); ?>">

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($mensajeData['nombre']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($mensajeData['correo']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required><?php echo htmlspecialchars($mensajeData['mensaje']); ?></textarea>
                    </div>

                    <div>
                        <button type="submit">Actualizar Mensaje</button>
                    </div>
                </form>
            </div>
        </section>
    </main> 

    <footer class="admin-footer">
        <p>2026 Mi Portafolio web</p>
        <p>Práctica de Programación Web todos los derechos reservados</p>
    </footer> 
</body>
</html>