<?php
// include '../conexion/conexion.php';
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link href="../img/favicon.ico" rel="icon" type="image/x-icon">
  <title>Nuevo Usuario</title>
  <!-- Page styles -->
  <link rel="stylesheet" href="../css/flexboxgrid.css">
  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

  <!-- ..::CREAR USUARIO::.. -->
  <div class="row center-xs">
    <div class="col-xs-6"></div>
    <h2 class="col-xs-10">
      Crear nuevo usuario
    </h2>

    <!-- Simple Textfield -->
    <div class="col-xs-6 start-xs">
      <form action="ins_usuarios.php" method="POST" enctype="multipart/form-data" id="miForm1">

        <label for="nombre_usu">Nombre:</label><br>
        <input type="text" name="nombre_usu" id="nombre_usu" autofocus pattern="[A-Za-zÑñ/s ]+">
        <br>

        <label for="apellido_usu">Apellido:</label><br>
        <input type="text" name="apellido_usu" id="apellido_usu" pattern="[A-Za-zÑñ/s ]+">
        <br>

        <label for="fechaNac_usu">Fecha de nacimiento:</label><br>
        <input placeholder="fecha" type="date" name="fechaNac_usu" id="fechaNac_usu">
        <br>

        <label for="email_usu">e-mail:</label> <br>
        <input type="email" name="email_usu" id="email_usu">
        <span id="email_usuValida"></span>
        <br>

        <label for="celular_usu">Celuar:</label><br>
        <input type="number" name="celular_usu" id="celular_usu">
        <br>

        <label for="pass_usu">Contraseña:</label><br>
        <input type="password" id="pass_usu" name="pass_usu">
        <br>

        <label for="pass_usu2">Verificar contraseña:</label><br>
        <input type="password" id="pass_usu2" name="pass_usu2">
        <br>

        <!-- The second value will be selected initially -->
        <label for="sede_usu">Sede:</label><br>
        <select name="sede_usu" id="sede_usu">
          <option disabled selected value="0">Seleccione una Sede</option>
          <option value="1">Central</option>
          <option value="2">Ecuador</option>
          <option value="3">Gaitan</option>
          <option value="4">four</option>
        </select>
        <br>

        <!-- The second value will be selected initially -->
        <label class="mdl-textfield__label" for="curso_usu">Curso:</label><br>
        <select name="curso_usu" id="curso_usu">
          <option disabled selected value="0">Seleccione un curso</option>
          <option value="1">601</option>
          <option value="2">602</option>
          <option value="3">603</option>
          <option value="4">604</option>
        </select>
        <br>

        <label for="foto_usu">Foto perfil:</label><br>
        <input type="file" name="foto_usu" id="foto_usu" accept="image/*">
        <br><br>

        <!-- FAB button with ripple -->
        <div id="next">
          <button class="myButton">
            Crear Usuario
          </button>
        </div>
        <br>
      </form>
    </div>
    <!-- <div class="col-xs-2"></div> -->
  </div>
  <!-- ..::FIN USUARIOS::.. -->


  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/additional-methods.min.js"></script>
  <script src="../js/validateES.js"></script>
  <script src="../js/usuarios.js"></script>
</body>

</html>