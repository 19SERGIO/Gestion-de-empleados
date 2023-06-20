<?php
include("../conexion/db-principal.php");

if(isset($_POST['buscar'])){
    $id = $_POST['iddep'];
    

    $query = "SELECT * FROM departamento WHERE dep_id = '$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        
        $departamento = mysqli_fetch_assoc($result);
        $id = $departamento['dep_id'];
        $nombre = $departamento['dep_nom'];
        $des = $departamento['dep_des'];
        
    }
}
if(isset($_POST['salir'])){
    header("Location: ../index/menu-dep.php");
    exit;
}
if(isset($_POST['guardar'])){
    $id = $_POST['iddep'];
    $nombre = $_POST['nombre'];
    $des = $_POST['descripcion'];
    

    $query = "UPDATE departamento SET dep_id = '$id', dep_nom = '$nombre', 
    dep_des = '$des' WHERE departamento.dep_id = '$id' ";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error en la modificación: " . mysqli_error($conn));
    }else{
        echo '<script>
        setTimeout(function() {
            alert("Departamento modificado con Exito");
            window.location.href = "../index/menu-dep.php";
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
            <h2>Modificar departamento</h2>
            <hr>
        </div>
        <form action="../consulta/modificardepartamento.php" method="POST">
            <div class="consulta">
            
                 <input type="text" id="iddep" name="iddep" placeholder="Id del departamento" value="<?php echo $id; ?>" readonly><br>
                 <input type="submit" class="btn btn-success btn block" name="buscar" value="BUSCAR">
                <hr>   
            
            
            </div>
            <div class="info">
                <input type="text" id="nombre" name="nombre"  placeholder="Nombre"value="<?php echo $nombre; ?>"><br>
                <input class="des" type="text" id="descripcion" name="descripcion" placeholder="Descripcion"value="<?php echo $des; ?>" ><br>
                
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


