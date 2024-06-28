<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> Actualizaciones </title>
  <link rel="stylesheet" type="text/css" href="../css/compras.css">
  <link rel="icon" href="../Logo.ico">
</head>

<body>

  <div id="Encabezado"><br>
    <h1> Tienda </h1><br>
    <h2> Modificar compra </h2><br>
  </div>

  <div id="Section"><br>
 

    <form action="modificar.php" method="POST" align="center" class="box">
      <p>Login:</p>
      <input type="text" placeholder="Escribe correo" required name="correo" value="" size="30" maxlenght="100" /><br><br>

      <div class="hijo">
        <center><img src="../img/lenovo.jfif" width="150px" height="150px"></center>
        <p>Apple - Desktop todo en uno iMac Core i5 de <br> $9000 </p>
        <input type="text" placeholder="Cantidad" value="0" required name="pc" size="20" maxlength="30" /><br><br>
      </div>


      <div class="hijo">
        <center><img src="../img/DD.jpg" width="150px" height="150px"></center>
        <p> Disco duro externo <br> $900 </p>
        <input type="text" placeholder="Cantidad" value="0" required name="dd" size="20" maxlength="30" /><br><br>
      </div>

      <div class="hijo">
        <center><img src="../img/alexa.jpg" width="150px" height="150px"></center>
        <p>Bocina inteligente Alexa <br> $1090 </p>
        <input type="text" placeholder="Cantidad" value="0" required name="bocina" size="20" maxlength="30" /><br>
      </div>

      <br><br><button> <input type="submit" value="Actualizar registro" name="Actualizar"></button>
      <button><a href="venta.php">Regresar al formulario </a></button>
    </form>

    <div id="Footer"><br>
      <h5 style="color:#ff9100"> L.I. Guadalupe Espíndola</h5> <br>
    </div>
</body>

</html>