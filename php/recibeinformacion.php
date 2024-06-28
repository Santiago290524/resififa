<?php
echo "<title>Formulario</title>";
echo '<link rel="icon" href="../fifa/imagenes/OIG1.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="../css/body.css" media="screen"/>';
echo '<link rel="stylesheet" type="text/css" href="../css/maquetacion1[1].css"/>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<link rel="stylesheet" href="../css/style.css"/>';

$usuario = $_GET["usuario"];
$apellido = $_GET["apellido"];
$telefono = $_GET["telefono"];
$fecha_nacimiento = $_GET["fecha_nacimiento"];
$sms = $_GET["sms"];
$sexo = $_GET["sexo"];

echo "<h2>La información recibida es:</h2>";
echo "El nombre del usuario es: " . $usuario . "<br><br>";
echo "El apellido del usuario es: " . $apellido . "<br><br>";
echo "El número telefónico del usuario es: " . $telefono . "<br><br>";
echo "La fecha de nacimiento del usuario es: " . $fecha_nacimiento . "<br><br>";
echo "El mensaje es: " . $sms . "<br><br>";
echo "El sexo del usuario es: " . $sexo . "<br><br>";
?>
