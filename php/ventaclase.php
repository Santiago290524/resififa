<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1" lang="es" xml:lang="es">

<head>
  <title>Carrito de compra</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shlortcut icon" href="../imagenes/OIG1.ico">
  <link rel="stylesheet" type="text/css" href="../css/compras.css"/>
  <script type="text/javascript" src=""></script>
</head>

<body>
  <div id="Encabezado"><br>
    <h1>Tienda</h1><br>
  </div>
  <noscript><p> Si por error desactivaste JavaScript, activalo nuevamente</p></noscript>
  <script type="text/JavaScript" src="../js/micodigo3.js"></script>
  <div id="Section"><br><br>

    <form action="../php/ticket.php" method="POST">

      <label for="email">Login</label>
      <input type="text" placeholder="Escribe correo" required name="email" value="" size="30" maxlength="100" /><br><br>

      <div class="hijo">
        <center><img src="../imagenes/download.jfif" width="150px" height="150px"></center>
        <p>Llavero copa del mundo <br> $600 </p><br>
        <input type="text" placeholder="Cantidad" value="0" required name="balones" size="20" maxlength="30" />
      </div>

      <div class="hijo">
        <center><img src="../imagenes/download1.jfif" width="150px" height="150px"></center>
        <p>Balon Original Qatar 2022 <br> $4200 </p><br>
        <input type="text" placeholder="Cantidad" value="0" required name="jerseys" size="20" maxlength="30" />
      </div>

      <div class="hijo">
        <center><img src="../imagenes/fifaaaa.jfif" width="150px" height="150px"></center>
        <p>Videojuego <br> $2500 </p><br>
        <input type="text" placeholder="Cantidad" value="0" required name="tacos" size="20" maxlength="30" />
      </div>

      <br><br><input class="btn" type="submit" value="Comprar" />
      <a href="../index.php" class="btn-1">Página principal</a><br><br>
    </form>
    <div id="Footer"><br>
      
    </div>
  </div>
</body>
</html>