<?php
include("../conexion/db-principal.php");

if(isset($_POST['buscar'])){
    $id = $_POST['idsal'];
    
    

    $query = "SELECT * FROM salario WHERE sal_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        
        $salario = mysqli_fetch_assoc($result);
        $id = $salario['sal_id'];
        $emp= $salario['emp_id'];
        $pue = $salario['pue_id'];
        $sal = $salario['sal_sal'];
        $fec = $salario['sal_fecIn'];
        
    }
}
if(isset($_POST['salir'])){
    header("Location: ../index/menu-sal.php");
    exit;
}
if(isset($_POST['guardar'])){
    $id = $_POST['idsal'];
    $emp = $_POST['idemp'];
    $pue = $_POST['idpue'];
    $sal = $_POST['salario'];
    $fec = $_POST['fechIn'];
    

    $query = "UPDATE salario SET sal_id = '$id', emp_id = '$emp', pue_id = '$pue',
     sal_sal = '$sal' WHERE salario.sal_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error en la modificación: " . mysqli_error($conn));
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Modificado con éxito");
            window.location.href = "../index/menu-sal.php";
        }); 
        </script>';
    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/modificar-dep.css">
</head>
<body>
    <center>
    <div class="cuadro1">
        <div class="titulo">
            <h2>Modificar Salario</h2>
            <hr>
        </div>
        <form action="../consulta/modificarsalario.php" method="POST">
            <div class="consulta">
            
                 <input type="text" id="idsal" name="idsal" placeholder="Id del salario" value="<?php echo $id; ?>" readonly><br>
                 <input type="submit" class="btn btn-success btn block" name="buscar" value="BUSCAR">
                <hr>   
            
            
            </div>
            <div class="info">
                <input type="text" id="edemp" name="idemp"  placeholder="Id del empleado" value="<?php echo $emp; ?>"><br>
                <input type="text" id="idpue" name="idpue" placeholder="Id del puesto" value="<?php echo $pue; ?>"><br>
                <input type="text" id="salario" name="salario"  placeholder="Salario" value="<?php echo $sal; ?>"><br>
                <input type="Date" id="FecIn" name="fecIn" placeholder="Fecha Inicio" value="<?php echo $fec; ?>"><br>
            </div>
        
            <div class="botones">
                <input type="submit" class="btn btn-success btn block" name="salir"  value="SALIR">
                <input type="submit" class="btn btn-success btn block" name="guardar" value="GUARDAR">    
            </div>
        </form>
    </center>
    </div>
</body>
</html>

