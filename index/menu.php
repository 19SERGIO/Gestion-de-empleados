<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
    <div class="cuadro1">
        <div class="titulo">
            <h2>Base de datos de gestion de empleados de recursos humanos</h2><img src="../img/red.png" alt="">
        </div>
        
        <div class="botones-menu">
            <div class="btn-der">
                <button type="submit" class="btn-emp" name="empleados" value="empleados" onclick="menuemp()"><div class="texto"><h3>Empleados</h3><p>Registro de empleados organizados</p></div>
                <img src="../img/chico.png" alt="">
                </button>
                <button type="submit" class="btn-pue" name="puesto" value="puesto" onclick="menupue()"><div class="texto"><h3>Puesto</h3><p>Registro de cargos organizacionales</p></div>
                <img src="../img/puesto-de-trabajo.png" alt="">
                </button>
            </div>
            <div class="btn-cen">
                <button type="submit" class="btn-dep" name="Departamento" value="Departamento" onclick="menudep()"><div class="texto"><h3>Departamento</h3><p>Funciones, responsabilidades</p></div>
                <img src="../img/edificio.png" alt="">
                </button>
                
                <button type="submit" class="btn-his" name="Historial" value="Historial" onclick="menuhis()"><div class="texto"><h3>Historial Laboral</h3><p>Historial de los registros de los empleados</p></div>
                    <img src="../img/tiempo.png" alt="">
            </div>
            <div class="btn-izq">
                <button type="submit" class="btn-sal" name="salario" value="salario"><div class="texto" onclick="menusal()"><h3>Salario</h3><p>Registro de salarios de la empresa</p></div>
                <img src="../img/mano.png" alt="">
                </button>
                </button>
                <button type="submit" class="btn-eva" name="evaluacion" value="evaluacion"><div class="texto"><h3>Evaluación</h3><p>Resultado de las evaluaciones a los empleados</p></div>
                <img src="../img/examen.png" alt="">
                </button>
                <div class="btn-salir">
            <button type="submit" class="btn-sal" name="salir" value="salir" onclick="inicio()">SALIR</button>
        </div>
            </div>
            
        </div>
        
    </div>
    <script>
        function inicio() {
            window.location.href = "login.php"; 
        }

        function menuemp(){
            window.location.href="menu-emp.php"
        }

        function menudep(){
            window.location.href="menu-dep.php"
        }

        function menusal(){
            window.location.href="menu-sal.php"
        }
        function menupue(){
            window.location.href="menu-pue.php"
        }
        function menuhis(){
            window.location.href="menu-his.php"
        }
        function menueva(){
            window.location.href="menu-eva.php"
        }
    </script>
</body>
</html>