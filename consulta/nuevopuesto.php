<?php  
include("../conexion/db-principal.php");

if(isset($_POST['crear'])){
    $id = $_POST['iddep'];
    $nombre = $_POST['nombre'];
    $des= $_POST['des'];

    $squery="INSERT INTO puesto(pue_id, pue_nombre, pue_descripcion) VALUES ('$id','$nombre','$des')";

    $res = mysqli_query($conn, $squery);

    if(!$res){
        die("no creado");
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Puesto creado con Exito");
            window.location.href = "../index/menu-pue.php";
        }); 
        </script>';
    }

}

if(isset($_POST['salir'])){
    header("Location: ../index/menu-pue.php");
    exit;
}

?>