<?php
    include("abre.php");
    $Id = $_REQUEST['Id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $consulta = "UPDATE empleados SET nombre='$nombre', apellidos='$apellidos'";
    $resultado = $conexion->query($consulta);
    if($resultado){
        header("Location: ../index.php");
    }else{
        echo "No se modifico";
    }
?>