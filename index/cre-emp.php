<?php include("../conexion/db-principal.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crear-emp.css">
    <title>Document</title>
</head>
<body>
    <div class="cuadro1">
        <div class="titulo">
            <h2>Crear Empleado</h2>
            <hr>
        </div>
        <center>
            <div class="formulario">
                <form action="../consulta/nuevoempleado.php" method="POST">
                <div class="crear">
                    <div class="uno">
                        <input type="text" id="idemp" name="idemp" placeholder="ID del empleado" >
                        <input type="text" id="iddep" name="iddep" placeholder="ID del departamento" >
                    </div>
                    <br>
                    <div class="dos">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" >
                    </div>
                    <br>
                    <div class="tres">
                        <input type="text" id="genero" name="genero" placeholder="Genero" >
                        <input type="text" id="direccion" name="direccion" placeholder="Dirección">
                    </div>
                    <br>
                    <div class="cuatro">
                        <input type="email" id="email" name="email" placeholder="Correo" >
                    </div>
                    <br>
                    <div class="cinco">
                        <input type="text" id="idpue" name="idpue" placeholder="ID del puesto" >
                        <input type="text" id="telefono" name="telefono" placeholder="Telefono" >
                    </div>
                </div>
                <br>
                <div class="botones">
                    <input type="submit" class="btn btn-success btn block" name="salir" value="SALIR">
                    <input type="submit" class="btn btn-success btn block" name="crear" value="CREAR">
                </div>
            </form>    
            </div>  
            
        </center>
        
    </div>
</body>
</html>