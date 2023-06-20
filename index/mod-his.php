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
            <h2>Modificar Historial Laboral</h2>
            <hr>
        </div>
        <form action="../consulta/modificarhistorial.php" method="POST">
            <div class="consulta">
            
                 <input type="text" id="idemp" name="idemp" placeholder="Id del Historial" ><br>
                 <input type="submit" class="btn btn-success btn block" name="buscar" value="BUSCAR">
                <hr>   
            
            
            </div>
            <div class="info">
                <input type="text" id="pue" name="pue"  placeholder="Id del puesto">
                <input type="text" id="emp" name="emp" placeholder="Id del empleado"><br>
                <input type="Date" id="fi" name="fi" placeholder="fecha Inicio">
                <input type="Date" id="ff" name="ff" placeholder="Fecha Fin"><br>
            </div>
        
            <div class="botones">
                <input type="submit" class="btn btn-success btn block" name="salir"  value="SALIR">
                <input type="submit" class="btn btn-success btn block" name="guardar" value="GUARDAR">    
            </div>
        </form>
    </center>
    </div>
</body>
</html>
