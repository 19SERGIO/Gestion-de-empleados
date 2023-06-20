<?php  
include("../conexion/db-principal.php");

if(isset($_POST['crear'])){
    $id = $_POST['iddep'];
    $nombre = $_POST['nombre'];
    $des= $_POST['des'];

    $squery="INSERT INTO departamento(dep_id, dep_nom, dep_des) VALUES ('$id','$nombre','$des')";

    $res = mysqli_query($conn, $squery);

    if(!$res){
        die("no creado");
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Departamento creado con Exito");
            window.location.href = "../index/menu-dep.php";
        }); 
        </script>';
    }

}

if(isset($_POST['salir'])){
    header("Location: ../index/menu-dep.php");
    exit;
}

?>