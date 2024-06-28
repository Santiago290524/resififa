<?php
echo '<link rel="stylesheet" type="text/css" href="../css/maquetacionpedro.css"/>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["usuario"];
    $apellidos = $_POST["apellido"];
    $contrasena = $_POST["contrasena"];
    $curp = $_POST["curp"];
    $email = $_POST["email"];
    $estado_civil = $_POST["estado_civil"];
    $sexo = $_POST["sexo"];
    $suscribirse = isset($_POST["Suscribirse"]); // Verifica si la casilla de suscripción está marcada

    // Aquí puedes enviar los mensajes o realizar otras acciones con los datos recibidos
    // Por ejemplo, enviar un correo de bienvenida o almacenar la información en una base de datos

    // Ejemplo de mensaje de bienvenida
    echo "¡Hola, $nombre $apellidos! Tu dirección de correo electrónico es: $email<br>";
    echo "Con el CURP: $curp<br>";
    echo "Estado civil: $estado_civil<br>";
    echo "Sexo: $sexo<br>";

    // Si se suscribe, muestra un mensaje
    if ($suscribirse) {
        echo "¡Gracias por suscribirte! Recibirás nuestras últimas novedades.";
    }
}
echo '<center><a href="../index.php" class="btn"> Menu </a></center>';
?>