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
            <h2>Crear Salario</h2>
            <hr>
        </div>
        <center>
            <div class="formulario">
                <form action="../consulta/nuevosalario.php" method="POST">
                <div class="crear">
                    
                    <input type="text" id="idsal" name="idsal" placeholder="ID del salario" ><br>
                    <input type="text" id="idemp" name="idemp" placeholder="ID del empleado" ><br>
                    <input type="text" id="idpue" name="idpue" placeholder="ID del puesto" ><br>
                    <input type="text" id="sal" name="sal" placeholder="salario" ><br>
                    <input type="date" id="fec" name="fec" placeholder="Fecha inicio" ><br>
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