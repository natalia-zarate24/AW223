<?php
require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($conexion, $_POST['id']);
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $mensaje = trim($_POST['mensaje']);

    if (empty($id) || empty($nombre) || empty($correo) || empty($mensaje)) {
        header("Location: editar.php?id=$id&error=vacios");
        exit();
    }

    $sql = "UPDATE mensajes SET nombre = '$nombre', correo = '$correo', mensaje = '$mensaje' WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        header("Location: admin.php?actualizado=exito");
        exit();
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
} else {
    header("Location: admin.php");
    exit();
}