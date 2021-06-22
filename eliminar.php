<?php
include("con_db.php");


if (isset($_POST['eliminar'])) {
    if (strlen($_POST['CODIGO'])) {
$num = trim($_POST['num']);
$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);


$depa = trim($_POST['depa']);
$fecha = trim($_POST['fecha']);
$hora = trim($_POST['hora']);
$CODIGO = trim($_POST['CODIGO']);
$consulta = mysqli_query($conec,"DELETE FROM recitas where CODIGO='$CODIGO'");
$resultado = mysqli_query($conec,$consulta);
if ($resultado) {
?>
<h3 class="ok">CITA REGISTRADA</h3>
<?php
} else {
    ?>
    <h3 class="bad">CITA BORRADA</h3>
    <?php
}


    }
}

if (isset($_POST['eliminar'])) {
    if (strlen($_POST['nombre'])) {
$num = trim($_POST['num']);
$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);

$depa = trim($_POST['depa']);
$fecha = trim($_POST['fecha']);
$hora = trim($_POST['hora']);
$consulta = mysqli_query($conec,"DELETE FROM recitas where nombre='$nombre'");
$resultado = mysqli_query($conec,$consulta);
if ($resultado) {
?>
<h3 class="ok">CITA REGISTRADA</h3>
<?php
} else {
    ?>
    <h3 class="bad">CITA BORRADA</h3>
    <?php
}


    }
}

?>

<?php
include("con_db.php");


if (isset($_POST['eliminar'])) {
    if (strlen($_POST['CODIGO'])) {
        $codi = trim($_POST['CODIGO']);

$consulta = mysqli_query($conec,"DELETE FROM historial where codi='$codi'");
$resultado = mysqli_query($conec,$consulta);
if ($resultado) {
?>
<h3 class="ok">CITA REGISTRADA</h3>
<?php
} else {
    ?>
    <h3 class="bad">CITA BORRADA</h3>
    <?php
}


    }
}

if (isset($_POST['eliminar'])) {
    if (strlen($_POST['nombre'])) {

$nombre = trim($_POST['nombre']);

$consulta = mysqli_query($conec,"DELETE FROM historial where nombre='$nombre'");
$resultado = mysqli_query($conec,$consulta);
if ($resultado) {
?>
<h3 class="ok">CITA REGISTRADA</h3>
<?php
} else {
    ?>
    <h3 class="bad">CITA BORRADA</h3>
    <?php
}


    }
}

?>