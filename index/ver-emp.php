<?php
include("../conexion/db-principal.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver empleado</title>
    <link rel="stylesheet" href="../css/ver-emp.css">
</head>
<body>
    <center>
        <div class="cuadro1">
            <h2>Ver Empleados</h2>
            <hr>
            <br>
        <table >
            <div class="titulo">
             <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>GENERO</th>
            <th>DIRECCION</th>
            <th>ID DEPARTAMENTO</th>
            <th>ID PUESTO</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
        </tr>   
            </div>
        
        <?php
        
        $query = "SELECT * FROM empleado";
        $result = mysqli_query($conn, $query);

        // Verificar si se obtuvieron resultados
        if (mysqli_num_rows($result) > 0) {
            // Iterar sobre los resultados y llenar la tabla
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['emp_id'] . "</td>";
                echo "<td>" . $row['emp_nom'] . "</td>";
                echo "<td>" . $row['emp_ape'] . "</td>";
                echo "<td>" . $row['emp_gen'] . "</td>";
                echo "<td>" . $row['emp_dir'] . "</td>";
                echo "<td>" . $row['dep_id'] . "</td>";
                echo "<td>" . $row['pue_id'] . "</td>";
                echo "<td>" . $row['emp_email'] . "</td>";
                echo "<td>" . $row['emp_tel'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No se encontraron empleados</td></tr>";
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
        ?>
    </table>
    <button onclick="salir()">SALIR</button>
        </div>
        
    </center>
</body>
</html>

<script>
    function salir() {
            window.location.href = "menu-emp.php"; 
        }
</script>