<?php include("../conexion/db-principal.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crear-dep.css">
    <title>Document</title>
</head>
<body>
    <div class="cuadro1">
        <div class="titulo">
            <h2>Crear puesto</h2>
            <hr>
        </div>
        <center>
            <div class="formulario">
                <form action="../consulta/nuevopuesto.php" method="POST">
                <div class="crear">
                    <input type="text" id="iddep" name="iddep" placeholder="ID del puesto" ><br>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" ><br>
                    <input type="text" class="id id-grande" id="des" name="des" placeholder="Descripcion" >  
                </div>         
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