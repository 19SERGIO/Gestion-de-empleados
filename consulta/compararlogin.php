<?php
include("../conexion/db.php");

if(isset($_POST['entrarlogin'])){
    $nombre = $_POST['username'];
    $contrasena = $_POST['password'];
    
    //consulta la tabla donde se va a crear
    
    $squery = "SELECT * FROM info WHERE nom = '$nombre' AND pas = '$contrasena'";
    $result = mysqli_query($conn, $squery);

    if(mysqli_num_rows($result) > 0){
        header("Location: ../index/menu.php");
        exit; 
    } else {
        echo "nel";
    }
}
?>
