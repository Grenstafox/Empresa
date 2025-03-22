<?php
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css">

        <title>Document</title>
    </head>
    <body>
        <?php
            include ("abre.php");
            $id = $_REQUEST['Id'];
            
            $consulta = "DELETE FROM empleados WHERE Id = '$Id' ";
            $resultado = $conexion->query($consulta);   
            
            $row= $resultado-> fetch_assoc();
        ?>
        <center>
            <h1>Actualizacion de Datos</h1>
            <form action="actualizar.php" method="post">
                <input type = "text" name="nombre" placeholder="nombre.." value = "<?php echo $row['nombre'];?>"/>  

                <input type = "text" name="apellidos" placeholder="apellidos.." value = "<?php echo $row['apellidos'];?>"/>  

                <input type="submit" value="enviar">
            </form>
        </center>
    </body>
    </html>
?>
