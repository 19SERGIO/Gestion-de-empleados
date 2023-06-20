<?php include("../conexion/db-principal.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/modificar-dep.css">
</head>
<body>
    <center>
    <div class="cuadro1">
        <div class="titulo">
            <h2>Eliminar Salario</h2>
            <hr>
        </div>
        <form action="../consulta/eliminarsalario.php" method="POST">
            <div class="consulta">
            
                 <input type="text" id="idsal" name="idsal" placeholder="Id del salario" ><br>
                 <input type="submit" class="btn btn-success btn block" name="buscar" value="BUSCAR">
                <hr>   
            
            
            </div>
            <div class="info">
                <input type="text" id="edemp" name="idemp"  placeholder="Id del empleado"><br>
                <input type="text" id="idpue" name="idpue" placeholder="Id del puesto"><br>
                <input type="text" id="salario" name="salario"  placeholder="Salario"><br>
                <input type="Date" id="FecIn" name="fecIn" placeholder="Fecha Inicio"><br>
            </div>
        
            <div class="botones">
                <input type="submit" class="btn btn-success btn block" name="salir"  value="SALIR">
                <input type="submit" class="btn btn-success btn block" name="guardar" value="Eliminar">    
            </div>
        </form>
    </center>
    </div>
</body>
</html>