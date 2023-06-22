<?php

include("../conexion/db-principal.php");

if(isset($_POST['save'])){
    $nombre = $_POST['username'];
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];
    $concontrasena = $_POST['conpassword'];
    
    //consulta la tabla donde se va a crear
    $squery ="INSERT INTO info(nom, email, pas, conpas) VALUES ('$nombre','$correo','$contrasena','$concontrasena')";
    $resul = mysqli_query($conn, $squery);

    if(!$resul){
        die("no creado");
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Usuario registrado con exito");
            window.location.href = "../index/menu.php";
        }); 
        </script>';
        
    }
        
}

?>