<?php

function consultaMensajes(){
    require_once "conexion.php";

    $selectMsj= "select * from mensajes";

    try{
        $rsMsj= mysqli_query($conexion,$selectMsj); //lo que guarde de esta consulta a la bd lo va a pasar a la variable rsmsj
        mysqli_close($conexion);
        return $rsMsj;

    }catch(Exception $e){
        die('Algo paso al consultar:'.$e->getMessage());
    }
}