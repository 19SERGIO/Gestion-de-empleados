<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu-emp.css">
</head>
<body>
    <div class="cuadro1">
        <div class="titulo"><h2>Base de datos Historial Laboral</h2></div>
        <hr>
        <div class="cuadros">
            <div class="cuadro_img">
                <img src="../img/tiempo.png" alt="">
            </div>
            <div class="cuadro_btn">
                <button onclick="crear()">CREAR</button>
                <button onclick="modificar()">MODIFICAR</button>
                <button onclick="eliminar()">ELIMINAR</button>
                <button onclick="ver()">VER</button>
            </div>
        
        </div>
        <center>
           <div class="btn-salir">
            <button onclick="salir()">SALIR</button>
        </div> 
        </center>
    </div>
    
</body>
</html>
<script>
    function salir() {
            window.location.href = "menu.php"; 
        }

    function crear(){
        window.location.href="cre-his.php";
    }
    function modificar(){
        window.location.href="mod-his.php"
    }
    function eliminar(){
        window.location.href="eli-his.php"
    }
    function ver(){
        window.location.href="ver-his.php"
    }
</script>