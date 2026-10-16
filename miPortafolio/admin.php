<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Administración - Mi Portafolio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>Zona Administración</h1>
        <p>Mensajes Recibidos</p>
    </header>

    <nav class="admin-nav">
        <a href="index.php" title="Regresar al portafolio">
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
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'consulta_mensajes.php';
                            $rsMensajes=consultaMensajes();

                            while($arrMensaje= mysqli_fetch_array($rsMensajes)){

                                echo"<tr>
                                    <td>".$arrMensaje['nombre']."</td>
                                    <td>".$arrMensaje['correo']."</td>
                                    <td>".$arrMensaje['mensaje']."</td>
                                    <td>".$arrMensaje['timeStamps']."</td>
                                    <td>
                                        <a href='editar.php'><img src='fa-solid fa-pen-to-square'></a>
                                        <a><img src='fa-solid fa-pen-to-square'></a>
                                    </td>
                                </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main> 

    <footer>
        <p>2026 Mi Portafolio web</p>
        <p>Práctica de Programación Web todos los derechos reservados</p>
    </footer> 

    <script src="consulta_mensajes.php"></script>
</body>
</html>