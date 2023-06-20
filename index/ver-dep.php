<?php include("../conexion/db-principal.php")?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabla de datos</title>
    <link rel="stylesheet" href="../css/ver-emp.css">
</head>
<body>
    <center>
    <div class="cuadro1">
    <h2>Ver Empleados</h2>
            <hr>
            <br>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
        </tr>
        <?php
        
        $query = "SELECT * FROM departamento";
        $result = mysqli_query($conn, $query);

        // Verificar si se obtuvieron resultados
        if (mysqli_num_rows($result) > 0) {
            // Iterar sobre los resultados y llenar la tabla
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['dep_id'] . "</td>";
                echo "<td>" . $row['dep_nom'] . "</td>";
                echo "<td>" . $row['dep_des'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No se encontraron datos</td></tr>";
        }

        
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
            window.location.href = "menu-dep.php"; 
        }
</script>