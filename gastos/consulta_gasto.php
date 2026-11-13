<?php

function consultaGasto(){
    require_once "conexion.php";

    $selectgasto= "select * from gastos";

    try{
        $rsgasto= mysqli_query($conexion,$selectgasto); 
        mysqli_close($conexion);
        return $rsgasto;

    }catch(Exception $e){
        die('Algo paso al consultar:'.$e->getMessage());
    }
}