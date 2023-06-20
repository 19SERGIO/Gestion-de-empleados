<?php include("../conexion/db-principal.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/modificar-emp.css">
</head>
<body>
    <center>
    <div class="cuadro1">
        <div class="titulo">
            <h2>Eliminar empleado</h2>
            <hr>
        </div>
        <form action="../consulta/eliminarempleado.php" method="POST">
            <div class="consulta">
            
                <input type="text" id="idemp" name="idemp" placeholder="Id del empleado" required><br>
                <button type="submit" class="btn-buscar" name="buscar" value="buscar" onclick=""> BUSCAR</button>
                <hr>   
            
            
            </div>
            <div class="info">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                <input type="text" id="apellido" name="apellido" placeholder="Apellido"><br>
                <input type="text" id="iddep" name="iddep" placeholder="Id del departamento">
                <input type="text" id="direccion" name="direccion" placeholder="Dirección"><br>
                <input type="email" id="email" name="email" placeholder="Correo">
                <input type="text" id="genero" name="genero" placeholder="Genero"><br>
                <input type="text" id="idpue" name="idpue" placeholder="Id del puesto">
                <input type="text" id="telefono" name="telefono" placeholder="telefono"><br>
            </div>
            <div class="btns">
                <button type="submit" class="btn-salir" name="salir" value="salir" onclick=""> SALIR</button>
                <button type="submit" class="btn-modificar" name="modificar" value="modificar" onclick="">ELIMINAR</button>
            </div>
        </form>
    </center>
    </div>
</body>
</html>
