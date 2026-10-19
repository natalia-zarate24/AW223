<?php

function consultaMensajes(){
    require_once "conexion.php";

    $selectMsj= "select * from mensajes";

    try{
        $rsMsj= mysqli_query($conexion,$selectMsj); 
        mysqli_close($conexion);
        return $rsMsj;

    }catch(Exception $e){
        die('Algo paso al consultar:'.$e->getMessage());
    }
}

function obtenerMensajePorId($id) {
    require_once "conexion.php";
    
    $id = mysqli_real_escape_string($conexion, $id);
    $sql = "SELECT * FROM mensajes WHERE id = '$id'";

    try {
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
    } catch(Exception $e) {
        die('Error al buscar el mensaje: ' . $e->getMessage());
    }
}