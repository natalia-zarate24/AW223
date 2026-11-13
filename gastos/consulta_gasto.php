<?php

function consultaGasto(){
    require_once "conexion.php";

    $selectgasto= "select * from gastos";

    try{
        $rsgasto= mysqli_query($conexion,$selectgasto); //lo que guarde de esta consulta a la bd lo va a pasar a la variable rsmsj
        mysqli_close($conexion);
        return $rsgasto;

    }catch(Exception $e){
        die('Algo paso al consultar:'.$e->getMessage());
    }
}