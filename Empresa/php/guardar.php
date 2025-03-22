<?php
    include("conexion.php");
    $nombre     =$_POST['nombre'];
    $apellidos  =$_POST['apellidos'];

    $consulta ="INSERT INTO empleados(nombre, apellidos) values('$nombre', '$apellidos')";
    
    if($conexion->query($consulta) ===  TRUE){
        header("Location: agregar.php");
    }else{
        echo "Error: ". $consulta."<br>" .$conexion->error;
    }

    $conexion->close();

?>