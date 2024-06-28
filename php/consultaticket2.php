<?php
echo '<title> Consultas </title>';
echo '<link rel="icon" href="../Logo.ico">';
echo '<link rel="stylesheet" type="text/css" href="../css/compraconsulta.css" />';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

//CONEXION A BD

//conectamos Con el servidor
$host = "localhost";
$user = "root";
$pass = "";
$db = "aplicacionweb";

//Establece conexión con la base de datos (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");
mysqli_select_db($con, $db) or die("problemas al conectar con la base de datos");


$consulta2 = mysqli_query($con, "SELECT * FROM ventas");
if (mysqli_num_rows($consulta2) > 0) {

  echo  '<div id="Encabezado"><br>';
  echo '<h1> Tienda </h1><br>';
  echo '</div>';

  echo "<table border=1 aling=center>";

  echo "<tr><th colspan= 8> <h3> CONSULTA COMPRAS </h3></th></tr>";
  echo "<td style=background-color:#b5b5b5> Correo del cliente </td> 
        <td style=background-color:#b5b5b5> Pc compradas </td> 
        <td style=background-color:#b5b5b5> Discos Duros Dcomprados </td> 
				<td style=background-color:#b5b5b5> Bocinas Alexa compradas </td>
        <td style=background-color:#b5b5b5> Total de la compra </td>";


  while ($registro = mysqli_fetch_array($consulta2)) {  //mysqli_fetch_array-- Obtiene una fila de resultados como un array asociativo, numérico, o ambos

    if ($registro["acum"] > 0) {

      echo "<tr>";
      echo "<td>" . $registro["correo"] . "</td>";
      echo "<td>" . $registro["pc"] . "</td>";
      echo "<td>" . $registro["dd"] . "</td>";
      echo "<td>" . $registro["bocina"]. "</td>";
      echo "<td>" . $registro["acum"] . "</td> ";
 
    }
  }
}
echo "</tr></table>";
echo '<button> <a href="venta.php">Regresar</a></button><br><br>';
?>