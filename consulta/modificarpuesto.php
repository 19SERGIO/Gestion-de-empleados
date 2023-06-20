<?php
include("../conexion/db-principal.php");

if(isset($_POST['buscar'])){
    
    $id = $_POST['iddep'];

    $query = "SELECT * FROM puesto WHERE pue_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $puesto = mysqli_fetch_assoc($result);
        $id = $puesto['pue_id'];
        $nombre = $puesto['pue_nombre'];
        $des = $puesto['pue_descripcion'];
    } else {
        echo '<script>
        setTimeout(function() {
            alert("Id de puesto no encontrada");
            window.location.href = "../index/mod-pue.php";
        }); 
        </script>';
    }
}

if(isset($_POST['salir'])){
    header("Location: ../index/menu-pue.php");
    exit;
}

if(isset($_POST['guardar'])){
    $id = $_POST['iddep'];
    $nombre = $_POST['nombre'];
    $des = $_POST['descripcion'];

    $query = "UPDATE puesto SET pue_nombre = '$nombre', pue_descripcion = '$des' WHERE puesto.pue_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error en la modificación: " . mysqli_error($conn));
    } else {
        echo '<script>
        setTimeout(function() {
            alert("Puesto modificado con Éxito");
            window.location.href = "../index/menu-pue.php";
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
            <h2>Modificar puesto</h2>
            <hr>
        </div>
        <form action="../consulta/modificarpuesto.php" method="POST">
            <div class="consulta">           
                <input type="text" id="iddep" name="iddep" placeholder="Id del puesto" value="<?php echo $id; ?>" readonly><br>
                <input type="submit" class="btn btn-success btn block" name="buscar" value="BUSCAR">
                <hr>   
            </div>
            <div class="info">
                <input type="text" id="nombre" name="nombre"  placeholder="Nombre" value="<?php echo $nombre; ?>"><br>
                <input class="des" type="text" id="descripcion" name="descripcion" placeholder="Descripción" value="<?php echo $des; ?>" ><br>                
            </div>
        
            <div class="botones">
                <input type="submit" class="btn btn-success btn block" name="salir" value="SALIR">
                <input type="submit" class="btn btn-success btn block" name="guardar" value="GUARDAR">    
            </div>
        </form>
    </center>
    </div>
</body>
</html>
