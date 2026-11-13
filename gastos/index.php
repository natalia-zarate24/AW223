<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Gastos Personales</title>
</head>
<body>
    <!-- encabezado -->
    <header>
        <h1>Control de Gastos personales</h1>
    </header>

    <!-- Contenido principal -->
    <main>
        <h3>Registrar nuevo gasto</h3>
        <form action="guardar_gasto.php" method="POST">
            <div class="registro">
                <p>Concepto:</p>
                <input type="text" id="concepto" name="txtconcepto" required >

                <p>Monto:</p>
                <input type="text" id="monto" name="txtmonto" required >

                <p>Categoria:</p>
                <select type="text" id="categoria" name="txtcategoria">
                    <option>Seleccione una categoria</option>
                    <option>Comida</option>
                    <option>Bebida</option>
                </select>
                <button type="submit">Registrar gasto</button> 

                <h3>Listado gastos</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Concepto</th>
                            <th>Categoria</th>
                            <th>Monto</th>
                            <th>Fecha</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once 'consulta_gasto.php';
                            $rsMensajes = consultaGasto();

                            while($arrMensaje = mysqli_fetch_array($rsMensajes)){
                                echo "<tr>
                                    <td>".$arrMensaje['concepto']."</td>
                                    <td>".$arrMensaje['categoria']."</td>
                                    <td>".$arrMensaje['monto']."</td>
                                    <td>".$arrMensaje['fecha']."</td>

                                </tr>";
                            }
                        ?>
                    </tbody>
                </table>


                    
    </main> 
    <script src="guardar_gasto"></script>
</body>
</html>