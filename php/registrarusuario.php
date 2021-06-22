<?php
  include("Conexion.php");

  $con=conectar();

  $name=$_POST['nombre'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  try {
      $query = "INSERT INTO cliente (Nombre_Cli,Email,Contraseña) VALUES ('".$name."', '".$email."', '".$pass."')";
      mysqli_query($con, $query) or die('Consulta fallida: ' . mysqli_error($con));
      echo "usuario registrado";
  } catch (Exception $e) {
      echo "error al registrar";
  }
  mysqli_close($con);
?>