<?php
session_start();

if (!isset($_SESSION['id_usu'])) {
  header("Location:../index.php?msj=Debe ser un usuario registrado.<br>");
} else {
  echo 'Bienvenido ' . $_SESSION['nombre_usu'];
}

?>

<h1> Empezamos a navegar </h1>

<button id="cerrar" onclick="cerrar()">Cerrar sesion</button>

<script>
  function cerrar() {
    window.open("../logout.php", "_self");
  }
</script>