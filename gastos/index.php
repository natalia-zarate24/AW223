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


                <table>
                    <tr>
                        <td>Concepto<td>
                        <td>Categoria<td>
                        <td>Monto<td>
                        <td>Fecha<td>
                        <td>Estado<td>
                        <td>Accion<td>
                    
    </main> 
    <script src="guardar_gasto"></script>
</body>
</html>