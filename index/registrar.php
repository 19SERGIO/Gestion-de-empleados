<?php include("../conexion/db-principal.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de empleados</title>
    <link rel="stylesheet" href="../css/registrar.css">
    
</head>
<body>
    
    <div class="cuadro1">
        <img src="../img/gente-de-negocios.png" alt="imagen">
        <h3>Gestión de empleados</h2>
        
        
        <form method="POST" action="../consulta/save.php">
        <div class="consulta">
            <div class="der">
                <input type="text" id="username" name="username" placeholder="USERNAME" required>
                <input type="password" id="password" name="password" placeholder="PASSWORD">
            </div>
            <div class="izq">
                <input type="email" id="email" name="email" placeholder="EMAIL" required >
                <input type="password" id="conpassword" name="conpassword" placeholder="CONFIRM PASSWORD" >
            </div>
            
            
            <br>
        </div>
        <p id="message" style="color: red;"></p>
        <br>
        <div class="aba">
           <br>
            <input type="checkbox" id="myCheckbox" name="myCheckbox" required><label for="myCheckbox">Acepta términos y condiciones</label>
            <br>
            <input type="submit" class="btn btn-success btn block" name="save" value="REGISTRAR">
            <br> 
        </div>
        
    </div>

</form>

<script>
    var password = document.getElementById("password");
    var conpassword = document.getElementById("conpassword");
    var message = document.getElementById("message");

    password.addEventListener("input", validarContraseña);
    conpassword.addEventListener("input", validarContraseña);

    function validarContraseña() {
        var passwordValue = password.value;
        var conpasswordValue = conpassword.value;

        if (passwordValue === conpasswordValue) {
            message.innerText = "";
        } else {
            message.innerText = "Las contraseñas no coinciden.";
        }
    }
</script>

</body>
</html>


</body>
</html>


