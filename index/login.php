<?php include("../conexion/db.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de empleados</title>
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<body>
    
    <div class="cuadro1">
        <img src="../img/registro.png" alt="imagen">
        <h3>Gestión de empleados</h2>
        
        
        <form method="post" action="../consulta/compararlogin.php">
        
        <input type="text" id="username" name="username" placeholder="USERNAME" required><br>
        <br>
        
        <input type="password" id="password" name="password" placeholder="PASSWORD" required ><br>
        <br>
        <input type="submit" class="btn btn-success btn block" name="entrarlogin" value="ENTRAR">
        <br><br>
        <h4>¿No tienes cuenta? <a href="registrar.php">Registrate</a></h4>
    </div>
</form>

</body>
</html>