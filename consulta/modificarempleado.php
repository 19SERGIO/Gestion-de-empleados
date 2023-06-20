<?php
include("../conexion/db-principal.php");



if(isset($_POST['buscar'])){
    $id = $_POST['idemp'];

    $query = "SELECT * FROM empleado WHERE emp_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $empleado = mysqli_fetch_assoc($result);
        $id = $empleado['emp_id'];
        $nombre = $empleado['emp_nom'];
        $apellido = $empleado['emp_ape'];
        $iddep = $empleado['dep_id'];
        $direccion = $empleado['emp_dir'];
        $email = $empleado['emp_email'];
        $genero = $empleado['emp_gen'];
        $idpue = $empleado['pue_id'];
        $telefono = $empleado['emp_tel'];
    }
}
if(isset($_POST['salir'])){
    header("Location: ../index/menu-emp.php");
    exit;
}
if(isset($_POST['guardar'])){
    $id = $_POST['idemp'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $departamento = $_POST['iddep'];
    $puesto = $_POST['idpue'];
    $correo = $_POST['email'];
    $tel = $_POST['telefono'];

    $query = "UPDATE empleado SET emp_id = '$id', emp_nom = '$nombre', emp_ape = '$apellido',
    emp_dir = '$direccion', pue_id = '$puesto', emp_email = '$correo',
    emp_tel = '$tel' WHERE empleado.emp_id = '$id' ";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error en la modificación: " . mysqli_error($conn));
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Empleado  Modificado con exito");
            window.location.href = "../index/menu-emp.php";
        }); 
        </script>';
        
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="../css/modificar-emp.css">
</head>
<body>
    <center>
        <div class="cuadro1">
            <div class="titulo">
                <h2>Modificar empleado</h2>
                <hr>
            </div>
            <form action="../consulta/modificarempleado.php" method="POST">
                <div class="consulta">
                    <input type="text" id="idemp" name="idemp" placeholder="Id del empleado" value="<?php echo $id; ?>" readonly><br>
                    <input type="submit" class="btn btn-success btn block" name="buscar" value="BUSCAR">
                    <hr>   
                </div>
                <div class="info">
                    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre">
                    <input type="text" id="apellido" name="apellido" value="<?php echo $apellido; ?>" placeholder="Apellido"><br>
                    <input type="text" id="iddep" name="iddep" value="<?php echo $iddep; ?>" placeholder="Id del departamento">
                    <input type="text" id="direccion" name="direccion" value="<?php echo $direccion; ?>" placeholder="Dirección"><br>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Correo">
                    <input type="text" id="genero" name="genero" value="<?php echo $genero; ?>" placeholder="Genero"><br>
                    <input type="text" id="idpue" name="idpue" value="<?php echo $idpue; ?>" placeholder="Id del puesto">
                    <input type="text" id="telefono" name="telefono" value="<?php echo $telefono; ?>" placeholder="Teléfono"><br>
                </div>
                <div class="botones">
                    <input type="submit" class="btn btn-success btn block" name="salir" value="SALIR">
                    <input type="submit" class="btn btn-success btn block" name="guardar" value="GUARDAR">    
                </div>
            </form>
        </div>
    </center>
</body>
</html>