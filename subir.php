

<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre'])) {

$nombre = trim($_POST['nombre']);

$depa = trim($_POST['depa']);


$hora = trim($_POST['hora']);


$fecha = new DateTime($_POST['date']);
$dates= $fecha->format('Y-m-d'); 



$consulta = "INSERT INTO recitas( nombre,  depa, fecha, hora) VALUES ('$nombre','$depa','$dates','$hora')";
$resultado = mysqli_query($conec,$consulta);
if ($resultado) {
?>
<h3 class="ok">CITA REGISTRADA</h3>
<?php
} else {
    ?>
    <h3 class="bad"></h3>
    <?php
}

$consulta = "SELECT * FROM recitas";
           $result=mysqli_query($conec,$consulta);
    }
}
?>


<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre'])) {
      
        $nombre = trim($_POST['nombre']);
       
        $depa = trim($_POST['depa']);
        $fecha = new DateTime($_POST['date']);
        $dates= $fecha->format('Y-m-d'); 
      
        
        $hora = trim($_POST['hora']);


$consulta = "INSERT INTO historial(nombre,  depa, fecha, hora, estado, condicional) VALUES ('$nombre','$depa','$dates', '$hora','EN PROCESO', '1' )";
$resultado = mysqli_query($conec,$consulta);


$consulta = "SELECT * FROM recitas";
           $result=mysqli_query($conec,$consulta);
    }
}
?>



