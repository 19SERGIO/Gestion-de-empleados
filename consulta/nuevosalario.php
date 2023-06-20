<?php  
include("../conexion/db-principal.php");

if(isset($_POST['crear'])){
    $ids = $_POST['idsal'];
    $ide = $_POST['idemp'];
    $idp= $_POST['idpue'];
    $sal=$_POST['sal'];
    $fec =$_POST['fec'];
   
    
    $squery = "INSERT INTO salario(sal_id, emp_id, pue_id, sal_sal, sal_fecIn) VALUES ('$ids','$ide', '$idp','$sal','$fec')";


    $res = mysqli_query($conn, $squery);

    if(!$res){
        die("no creado");
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Salario creado con Exito");
            window.location.href = "../index/menu-emp.php";
        }); 
        </script>';
        
    }

}

if(isset($_POST['salir'])){
    header("Location: ../index/menu-sal.php");
    exit;
}

?>