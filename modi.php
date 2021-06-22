<?php
include("con_db.php");


if (isset($_POST['modificar'])) {
    if (strlen($_POST['CODIGO'])) {
$num = trim($_POST['num']);
$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);

$depa = trim($_POST['depa']);
$fecha = trim($_POST['fecha']);
$hora = trim($_POST['hora']);
$mes = trim($_POST['mes']);
$CODIGO = trim($_POST['CODIGO']);
$consulta = mysqli_query($conec,"UPDATE recitas SET num='$num', nombre='$nombre', correo='$correo', depa='$depa', fecha='$fecha', mes='$mes', hora='$hora' WHERE CODIGO= '$CODIGO'");
$resultado = mysqli_query($conec,$consulta);
if ($resultado) {
?>
<h3 class="ok">CITA REGISTRADA</h3>
<?php
} else {
    ?>
    <h3 class="bad">CITA MODIFICADA</h3>
    <?php
}


    }
}

?>

<?php
include("con_db.php");


if (isset($_POST['modificar'])) {
    if (strlen($_POST['CODIGO'])) {
    
        $codi= trim($_POST['CODIGO']);
        $nombre = trim($_POST['nombre']);
        $numero = trim($_POST['num']);
        $correo = trim($_POST['correo']);
        $depa = trim($_POST['depa']);
        $fecha = trim($_POST['fecha']);
        $hora = trim($_POST['hora']);
        $mes = trim($_POST['mes']);
       
      
 mysqli_query($conec,"UPDATE historial SET nombre='$nombre', numero='$numero', correo='$correo', depa='$depa', fecha='$fecha', mes='$mes', hora='$hora', estado='EN PROCESO' WHERE codi= '$codi'");
$resultado = mysqli_query($conec,$consulta);
if ($resultado) {
?>
<h3 class="ok">CITA REGISTRADA</h3>
<?php
} else {
    ?>
    <h3 class="bad">CITA MODIFICADA</h3>
    <?php
}


    }
}

?>

