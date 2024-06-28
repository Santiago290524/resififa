<?php
echo '<title>Ordenar Pedido</title>';
echo '<link rel="icon" href="../imagenes/quesadillas.ico">';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

// Conectando con la BD
$host = "localhost";
$user = "root";
$pass = "";
$db = "futbol"; // Nombre de la BD

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

echo "Conexión exitosa <br/><br/>";

$usuario = $_POST['usuario'];
$apellido = $_POST['apellido'];
$contrasena = $_POST['contrasena'];
$curp = $_POST['curp'];
$email = $_POST['email'];

$sql = "INSERT INTO usuario VALUES ('$usuario', '$apellido', '$contrasena', '$curp', '$email')";

if (mysqli_query($con, $sql)) {
    echo "El registro del pedido se realizó con éxito";
} else {
    echo "Error al insertar: " . $sql . "<br/>" . mysqli_error($con);
}

mysqli_close($con);

echo '<br/><br/><a href="../index.php">Regresar</a>';
?>
