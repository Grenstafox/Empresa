<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>

</head>
<body>
    <center>
        <h1>Registro de Datos</h1>
        <form action="guardar.php" method="POST">
            <ul> 
                <li><h2>Detalles</h2>
                    <span class="required_notification">*Datos requeridos</span>
                </li>

                <li><label for="Nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="nombre" maxlength="30" require>
                </li>
                <li><label for="Apellidos">Apellidos</label>
                    <input type="text" name="apellidos" placeholder="apellidos" maxlength="30" require>
                </li>
                <input type="submit" value="Aceptar"/>
            </ul>

                
        </form>


    </center>
</body>
</html>