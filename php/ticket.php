<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/compras.css" />
    <link rel="icon" href="../Logo.ico" />
    <link rel="stylesheet" type="text/css" href="../css/colorformulario.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../css/maquetacionformulario.css"/>
    <style>
        body {
            color: #00338D; 
        }
        h3, h2 {
            color: #00338D; 
        }
    </style>
</head>
<body>

<?php
$email = $_POST["email"];
$balones = $_POST["balones"];
$jerseys = $_POST["jerseys"];
$tacos = $_POST["tacos"];

define("preciobalon", 600);  
define("preciojersey", 1200);  // Precio aproximado de un jersey de fútbol
define("preciotacos", 2500);  // Precio aproximado de unos tacos de fútbol

$totalbalones = $balones * preciobalon;
$totaljerseys = $jerseys * preciojersey;
$totaltacos = $tacos * preciotacos;
$acumulador = 0;

echo "<h3>Usuario: $email</h3>";
echo "<h2>Ticket de compra</h2>";

echo "<ul>";

if ($balones > 0) {
    echo "<li>";
    echo "$balones Llavero - Precio: $" . preciobalon . " - Total: $" . $totalbalones;
    echo "</li>";
    $acumulador += $totalbalones;
}

if ($jerseys > 0) {
    echo "<li>";
    echo "$jerseys Balon Qatar 2022 - Precio: $" . preciojersey . " - Total: $" . $totaljerseys;
    echo "</li>";
    $acumulador += $totaljerseys;
}

if ($tacos > 0) {
    echo "<li>";
    echo "$tacos Videojuego EA FC 24 - Precio: $" . preciotacos . " - Total: $" . $totaltacos;
    echo "</li>";
    $acumulador += $totaltacos;
}

echo "</ul>";

echo "<h3>El total de productos es: " . ($balones + $jerseys + $tacos) . "</h3>";
echo "<h3>El total de la compra es: $" . $acumulador . "</h3>";
echo "<h3>Gracias por su compra</h3>";

?>

<?php

echo '<title> Ordenar Pedido </title>';
echo '<link rel="icon" href="../imagenes/quesadillas.ico">';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

//Conectando con la BD
$host ="localhost";
$user ="root";
$pass ="";
$db="futbol";  //Nombre de la BD


$con = mysqli_connect($host, $user, $pass, $db);


if (!$con)
{
    die("La conexion ha fallado: " . mysqli_connect_error());
}

echo "Conexión existosa <br/> <br/>";

$email = $_POST['email'];
$balones = $_POST['balones'];
$jerseys = $_POST['jerseys'];
$tacos = $_POST['tacos'];

$sql = "INSERT INTO comprasf VALUES ( '$email', '$balones', '$jerseys', '$tacos')";

if (mysqli_query($con, $sql))
{
    echo "El registro del pedido se realizo con éxito";
}else{
    echo "Error al insertar: " . $sql . "<br/>" . mysqli_error($con);
}
mysqli_close($con);


echo '<br/><br/><a href="../php/ventaclase.php"> Regresar </a>';

?>
<a href="../index.php" class="btn-1">Página principal</a><br><br>
</body>
</html>