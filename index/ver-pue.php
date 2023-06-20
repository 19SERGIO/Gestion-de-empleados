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
    <h2>Ver Puestos</h2>
            <hr>
            <br>
    <table>
        <tr>
            <th>ID DEL PUESTO</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
        </tr>
        <?php
        
        $query = "SELECT * FROM puesto";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['pue_id'] . "</td>";
                echo "<td>" . $row['pue_nombre'] . "</td>";
                echo "<td>" . $row['pue_descripcion'] . "</td>";
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
            window.location.href = "menu-pue.php"; 
        }
</script>