<?php
session_start();
if (isset($_SESSION["numero_acceso"])) //Verifica si existe la variable session
{
$_SESSION["numero_acceso"]++;
}
else
{
$_SESSION["numero_acceso"] = 0;
}
?>
<?php
$numero = $_SESSION["numero_acceso"];
if ( $numero> 0)
{
print "<p> Haz accedido esta pagina <b> $numero </b> veces</p>";
}
else
{
print "<p> Hola esta es tu primera visita.</p>";
}
?>
<a href="./php/eliminasesion.php">Eliminar sesion </a>



<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML 1.0 strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="shlortcut icon" href="../imagenes/OIG1.ico">

    <link rel="stylesheet" type="text/css" href="../fifa/css/ejemplo.css"/>
</head>

<body>
    <noscript><p> Si por error desactivaste JavaScript, activalo nuevamente</p></noscript>
    <script type="text/JavaScript" src="../fifa/js/micodigo.js"></script>
    <header>
        <h1><strong>Residencia FIFA</strong></h1>
        <h2>París, Francia</h2>
        <ul class="navbar"></ul>
    </header> <!--Introduce enlaces de navegacion-->

    <main>
        <header><h1><center>FIFA</center></h1></header>
        <li class="navbar">
        <a href="../fifa/html/mision.html" class="btn">Misión</a>
        <a href="../fifa/html/vision.html" class="btn">Visión</a>
        <a href="../fifa/php/ventaclase.php" class="btn">Productos en venta</a>
        <a href="../fifa/html/horarios.html" class="btn">Horarios</a>
        <a href="../fifa/html/listas.html" class="btn">Más Información</a>
        <a href="../fifa/html/formulario2.html" class="btn">Iniciar Sesión </a>
        </li>
        <main class="santiago_teo"
        <p><strong><center>OBJETIVO</strong></center><br><br><i> <center> El objetivo principal de la FIFA es promover, desarrollar y mejorar el futbol en todo el mundo. <br><br>
            Esto inluye el la organizacion de competiciones inter nacionales la implementacionde programas de desarrollo para el futbol en diferentes regiones 
            La programacion de la itegridad y el deporte y la defensa de los ineteres de sus asociados.<br><br>
            La FIFA se esfuerza por hacer del futbol un deporte global que une a alas personas a traves de su pasion compartida por el juego.</center></p><br><br></i>
        </main>
        <div class="slideshow">
        <center><center>><img src="../fifa/imagenes/fifa1.jpg"></center><center>
        </div>
    </main> 
    
    <footer>
            <p>Fernanda Jazmin Olivares Segura
                Teo Santiago Rojas
                Angel Felipe Lopez Cuevas
            </p>
    </footer>

</body>

</html>