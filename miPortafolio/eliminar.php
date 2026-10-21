<?php
require_once "conexion.php";

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conexion, $_GET['id']);

    $sql = "DELETE FROM mensajes WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        header("Location: admin.php?eliminado=success");
        exit();
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    header("Location: admin.php");
    exit();
}