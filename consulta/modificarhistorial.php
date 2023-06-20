<?php
include("../conexion/db-principal.php");



if(isset($_POST['buscar'])){
    $id = $_POST['idemp'];

    $query = "SELECT * FROM historial_laboral WHERE his_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $historial_laboral = mysqli_fetch_assoc($result);
        $id = $historial_laboral['his_id'];
        $pue = $historial_laboral['pue_id'];
        $emp = $historial_laboral['emp_id'];
        $fi = $historial_laboral['his_fecIn'];
        $ff = $historial_laboral['his_fecFn'];
    }
}
if(isset($_POST['salir'])){
    header("Location: ../index/menu-his.php");
    exit;
}
if(isset($_POST['guardar'])){
    $id = $_POST['idemp'];
    $pue = $_POST['pue'];
    $emp = $_POST['emp'];
    $fi = $_POST['fi'];
    $ff = $_POST['ff'];

    $query = "UPDATE historial_laboral SET pue_id = '$pue', emp_id = '$emp',
    his_fecIn = '$fi', his_fecFn = '$ff' WHERE his_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error en la modificación: " . mysqli_error($conn));
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Historial Laboral  Modificado con exito");
            window.location.href = "../index/menu-his.php";
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
            <form action="../consulta/modificarhistorial.php" method="POST">
                <div class="consulta">
                    <input type="text" id="idemp" name="idemp" placeholder="Id del Historial laboral" value="<?php echo $id; ?>" readonly><br>
                    <input type="submit" class="btn btn-success btn block" name="buscar" value="BUSCAR">
                    <hr>   
                </div>
                <div class="info">
                    <input type="text" id="pue" name="pue" value="<?php echo $pue; ?>" placeholder="Nombre">
                    <input type="text" id="emp" name="emp" value="<?php echo $emp; ?>" placeholder="Apellido"><br>
                    <input type="text" id="fi" name="fi" value="<?php echo $fi; ?>" placeholder="Fecha Inicio">
                    <input type="text" id="ff" name="ff" value="<?php echo $ff; ?>" placeholder="Fecha Fin"><br>
                    
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