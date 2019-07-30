<?php
include 'conexion/conexion.php';
session_start();

$email_usu = $con->real_escape_string($_POST['email_usu']);
$pass_usu = $con->real_escape_string($_POST['pass_usu']);
$pass_usu = sha1($pass_usu);

if (!filter_var($email_usu, FILTER_VALIDATE_EMAIL)) {
  //El e-mail no cumple con el formato
  // echo 'El e-mail no cumple con el formato';
  exit();
}
$sel = $con->query("SELECT id_usu, email_usu, nombre_usu, apellido_usu, foto_usu FROM users WHERE email_usu = '$email_usu' AND pass_usu = '$pass_usu' ");
$row = mysqli_num_rows($sel);
$session = mysqli_fetch_assoc($sel);
// print_r('<br> resultado de la consulta ' . $row);
if ($row !== 0) {

  //Resgistrar el ultimo acceso de la persona
  $date = date("Y-m-d H:i:s");
  $idu = $session['id_usu'];
  $con->query("UPDATE `users` SET `ultimasesion_usu`= '$date' WHERE `id_usu` = '$idu'");

  //creamos la sesion para el usuatio
  $_SESSION['id_usu'] = $session['id_usu'];
  $_SESSION['nombre_usu'] = $session['nombre_usu'];
  $_SESSION['apellido_usu'] = $session['apellido_usu'];
  $_SESSION['foto_usu'] = $session['foto_usu'];

  echo "OK"; //"El e-mail y contraseña ya existe se puede ingresar";
} else {
  echo  'Error en el usuario o contraseña';
}
$con->close();
