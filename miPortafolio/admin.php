<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Administración - Mi Portafolio</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <h1>Zona Administración</h1>
        <p>Mensajes Recibidos</p>
    </header>

    <nav class="admin-nav">
        <a href="index.html" title="Regresar al portafolio">
            <i class="fa-solid fa-house"></i>
        </a>
    </nav>

    <main>
        <section class="section-home">
            <div class="admin-card">
                <h2>Mensajes Recibidos</h2>
                
                <?php
                $mensajes = [
                    ["id" => 1, "nombre" => "Ana", "correo" => "ana@example.com", "mensaje" => "Hola, me interesa tu portafolio."],
                    ["id" => 2, "nombre" => "José", "correo" => "jose@example.com", "mensaje" => "Quisiera más información sobre tus proyectos."]
                ];
                ?>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th style="text-align: center;">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mensajes as $msg): ?>
                        <tr>
                            <td><?php echo $msg['id']; ?></td>
                            <td><?php echo $msg['nombre']; ?></td>
                            <td><?php echo $msg['correo']; ?></td>
                            <td><?php echo $msg['mensaje']; ?></td>
                            <td style="text-align: center;">
                                <a href="editar.php?id=<?php echo $msg['id']; ?>" title="Editar" style="color: #333; margin-right: 8px;">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="borrar.php?id=<?php echo $msg['id']; ?>" title="Borrar" style="color: #d9534f;">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main> 

    <footer class="admin-footer">
        <p>2026 Mi Portafolio web</p>
        <p>Práctica de Programación Web todos los derechos reservados</p>
    </footer> 
</body>
</html>