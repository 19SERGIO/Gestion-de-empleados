<?php  
include("../conexion/db-principal.php");

if(isset($_POST['crear'])){
    $id = $_POST['id'];
    $emp = $_POST['emp'];
    $pue= $_POST['pue'];
    $fi=$_POST['fi'];
    $ff =$_POST['ff'];
    

    $squery="INSERT INTO historial_laboral(his_id, pue_id, emp_id, his_fecIn, his_fecFn) VALUES ('$id','$pue',
    '$emp','$fi','$ff')";

    $res = mysqli_query($conn, $squery);

    if(!$res){
        die("no creado");
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Histial Laboral creado con Exito");
            window.location.href = "../index/menu-his.php";
        }); 
        </script>';
        
    }

}

if(isset($_POST['salir'])){
    header("Location: ../index/menu-his.php");
    exit;
}

?>