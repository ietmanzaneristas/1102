<?php
include 'conexion/conexion.php';
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link href="img/favicon.ico" rel="icon" type="image/x-icon">
  <title>IETFMH Login</title>
  <!-- Page styles -->
  <link rel="stylesheet" href="css/flexboxgrid.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <div class="row center-xs">
    <h3 class="col-xs-10">Ejemplo inicio de sesión</h3>
    <!-- ..::LOGIN::.. -->
    <h2 class="col-xs-10">
      Iniciar sesión
    </h2>
    <div class="col-xs-3"></div>
    <!-- Formulario -->
    <form action="inicio/index.php" class="col-xs-6 start-xs">
      <label for="user">Usuario:</label> <br>
      <input type="text" id="user" name="user" autofocus>
      <span class="user_error">Usuario invalido</span>
      <br><br>
      <label for="pass">Contraseña:</label> <br>
      <input type="password" id="pass" name="pass">
      <span class="pass_error">Contraseña invalida</span>
      <br> <br>
      <div id="next">
        <button>
          Entrar
        </button>
      </div>
      <br>
    </form>
    <!-- END Formulario -->
    <div class="col-xs-3"></div>
  </div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
  <script src="js/validateES.js"></script>
  <script src="js/funciones.js"></script>
</body>

</html>