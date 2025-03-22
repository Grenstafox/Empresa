<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="empresa/css/style.css">
        <title>Document</title>
    </head>
        <body>
            <center>
                 <table>
                    <thead>
                    <tr>
                        <td><th>Id</th></td>
                        <td><th>Nombre</th></td>
                        <td><th>Apellidos</th></td>
                    </tr>
                    </thead>
                    <!---AQUI INICIA LA LECTURA DE LOS DATOS -->
                    <tbody>
                        <?php
                            include ("php/abre.php");
                            $consulta = "SELECT * FROM empleados";
                            $resultado = $conexion->query($consulta);
                            $a=1;
                            while ($row = $resultado->fetch_assoc()){
                        ?>
                            <tr>
                                
                                <td><?php echo $row['Id'];          ?></td>
                                <td><?php echo $row['nombre'];      ?></td>
                                <td><?php echo $row['apellidos'];   ?></td>

                    <th><a href="php/modificar.php?id=<?php echo $row['Id'];?>"><img height="35px" src="img/cam.png"></a></th>
                    <th><a href="php/eliminar.php?id=<?php echo $row['Id'];?>"><img height="35px" src="img/borr.png"></a></th>
                            </tr>
                    </tbody>
                        <?php 
                           }
                        ?>
            </table>
            <br><br>
            <footer>
                <p>desarrolladores web / contacto: desarrolla@gmail.com</p>
                <p>Ciudad Ju&aacute;rez, Chih. Marzo 2025</p>
            </footer>
        </center>
    </body>
</html>