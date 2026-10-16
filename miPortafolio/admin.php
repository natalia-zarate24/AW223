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

    <nav>
        <a href='index.php'><img src='./images/home.png' style='width: 30px; height: auto; display: inline-block;'></a>
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
                                        <a href='editar.php'><img src='./images/edit.png' style='width: 20px; height: auto; display: inline-block; margin-right: 20px; margin-left: 25px'></a>
                                        <a href='eliminar.php'><img src='./images/delete.png' style='width: 20px; height: auto; display: inline-block;'></a>
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