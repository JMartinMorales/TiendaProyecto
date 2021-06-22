<?php
  
  function conectar(){
    $servidor = "127.0.0.1:3306"; //el servidor que utilizaremos, en este caso será el localhost
    $usuario = "root"; //El usuario que acabamos de crear en la base de datos
    $contrasenha = ""; //La contraseña del usuario que utilizaremos
    $BD = "tienda"; //El nombre de la base de datos

    $conexion = @mysqli_connect($servidor, $usuario, $contrasenha) or die("Error de conexion".mysqli_error());
    mysqli_select_db($conexion, $BD);

    return $conexion;
  }

?>

