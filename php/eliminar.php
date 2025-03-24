<?php
    include("abre.php");
    $Id = $_REQUEST['Id'];
    echo $Id;
    $consulta = "DELETE FROM empleados WHERE Id = '$Id' ";
    echo $consulta;
    $resultado = $conexion->query($consulta);

    if($conexion-> query($consulta)=== TRUE){
        header("Location: ../mostrar.php");
    }else{
        echo "Error: " .$consulta. "<br>" .$conexion->error;
    }
?>
