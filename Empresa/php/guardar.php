<?php
    include("conexion.php");
    $nombre     =$_POST['nombre'];
    $apellidos  =$_POST['apellidos'];
    $puesto     =$_POST['puesto'];
    $horario    =$_POST['horario'];

    $consulta ="INSERT INTO empleados(nombre, apellidos, puesto, horario) values
    ('$nombre', '$apellidos', '$puesto', '$horario')";
    
    if($conexion->query($consulta) ===  TRUE){
        header("Location: ../mostrar.php");
    }else{
        echo "Error: ". $consulta."<br>" .$conexion->error;
    }

    $conexion->close();

?>