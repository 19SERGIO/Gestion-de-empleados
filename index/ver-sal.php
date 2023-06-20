<?php
include("../conexion/db-principal.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver salarios</title>
    <link rel="stylesheet" href="../css/ver-emp.css">
</head>
<body>
    <center>
        <div class="cuadro1">
            <h2>Ver Salario</h2>
            <hr>
            <br>
        <table >
            <div class="titulo">
             <tr>
            <th>ID DEL SALARIO</th>
            <th>ID DEL EMPLEADO</th>
            <th>ID DEL PUESTO</th>
            <th>SALARIO</th>
            <th>FECHA INICIO</th>
            
        </tr>   
            </div>
        
        <?php
        
        $query = "SELECT * FROM SALARIO";
        $result = mysqli_query($conn, $query);

        // Verificar si se obtuvieron resultados
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['sal_id'] . "</td>";
                echo "<td>" . $row['emp_id'] . "</td>";
                echo "<td>" . $row['pue_id'] . "</td>";
                echo "<td> $" . $row['sal_sal'] . "</td>";
                echo "<td>" . $row['sal_fecIn'] . "</td>";
               
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No se encontraron salarios</td></tr>";
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
            window.location.href = "menu-sal.php"; 
        }
</script>