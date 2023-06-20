<?php  
include("../conexion/db-principal.php");

if(isset($_POST['crear'])){
    $id = $_POST['idemp'];
    $nombre = $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $genero=$_POST['genero'];
    $direccion =$_POST['direccion'];
    $departamento=$_POST['iddep'];
    $puesto = $_POST['idpue'];
    $correo = $_POST['email'];
    $tel = $_POST['telefono'];

    $squery="INSERT INTO empleado(emp_id, emp_nom, emp_ape, emp_gen, emp_dir, 
    dep_id, pue_id, emp_email, emp_tel) VALUES ('$id','$nombre',
    '$apellido','$genero','$direccion','$departamento','$puesto','$correo','$tel')";

    $res = mysqli_query($conn, $squery);

    if(!$res){
        die("no creado");
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Empleado creado con Exito");
            window.location.href = "../index/menu-emp.php";
        }); 
        </script>';
        
    }

}

if(isset($_POST['salir'])){
    header("Location: ../index/menu-emp.php");
    exit;
}

?>