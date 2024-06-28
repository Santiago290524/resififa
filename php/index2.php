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
<a href="../php/eliminasesion.php">Eliminar sesion </a>



<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML 1.0 strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="shlortcut icon" href="../fifa/imagenes/OIG1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../fifa/css/style.css">
    <link rel="stylesheet" type="text/css" href="../fifa/css/index.css"/>
</head>

<body>
    <noscript><p> Si por error desactivaste JavaScript, activalo nuevamente</p></noscript>
    <script type="text/JavaScript" src="../fifa/js/micodigo.js"></script>
    <header>
        <h1><strong>Residencia FIFA</strong></h1>
        <h2>España, Madrid</h2>
        <ul class="navbar"></ul>
    </header> <!--Introduce enlaces de navegacion-->

    <main>
        <header><h1><center>FIFA</center></h1></header>
        <ul class="aside">
        <a href="../fifa/html/mision.html" class="btn">Misión</a><br>
        <article class="articulo"><a href="../fifa/html/vision.html"><li>Visión</li></a></article>
        <article class="articulo"><a href="php/ventaclase.php"><li>Productos en venta</li></a></article>
        <article class="articulo"><a href="../fifa/html/horarios.html"><li>Horarios</li></a></article>
        <article class="articulo"><a href="../fifa/html/listas.html"><li>Más Información</li></a></article>
        <article class="articulo"><a href="../fifa/html/formulario2.html"><li>Iniciar Sesión </li></a></article>
        </ul>
        <main class="santiago_teo"
        <p><strong><center>OBJETIVO</strong></center><br><br><i> <center>El objetivo principal de la FIFA es promover, desarrollar y mejorar el futbol en todo el mundo. <br><br>
            Esto inluye el la organizacion de competiciones inter nacionales la implementacionde programas de desarrollo para el futbol en diferentes regiones 
            La programacion de la itegridad y el deporte y la defensa de los ineteres de sus asociados.<br><br>
            La FIFA se esfuerza por hacer del futbol un deporte global que une a alas personas a traves de su pasion compartida por el juego.</center></p><br><br></i>
        </main>
    </main> <!--Contiene el contenido principal-->
<center><img src="../fifa/imagenes/fifa1.jpg"></center>
    
    <footer>
        <p>Santiago Rojas Teo 777 275 06 48 <br></br>
      Lopez Cuevas Angel Felipe 777 442 77 02
      Fernanda Jazmin Olivares Segura 
    </p>
    </footer> <!--Contiene el contenido principal-->

</body>

</html>