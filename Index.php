<?php
$conexion=mysqli_connect("localhost", "root", "", "sistema1");
session_start();

$tabla1 = "select * from medico";
$tabla2 = "select * from paciente";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRE SU CONSULTA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<section class="form-register">
            <form method="post">
            <h4>BIENVENIDO, COMPLETE EL REGISTRO:</h4>
                
              
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="NOMBRE DEL PACIENTE">
               
                
                <div class="btn">
                        <input class= "controls" type="date" name="date" id="date">
                    </div>


                <input class="controls" type="text" name="hora" id="hora" placeholder="HORA EN FORMATO 24H ( 20:00 )">



               
				
                <label for="depa">INGRESE SU MEDICO:</label>
                <select class="controls" name= "depa">
                <option disabled="">SELECCIONA UN DEPARTAMENTO</option>
                <option value="Dr. Felipe Ferras Gomez / CARDIOLOGÍA">Dr. Felipe Ferras Gomez / CARDIOLOGÍA</option>
                <option value="Dra. Amanda Miguel / DERMATOLOGÍA">Dra. Amanda Miguel / DERMATOLOGÍA</option>
                <option value="Dra. Hereida Concepcion / GINECOLOGÍA Y OBSTETRICIA">Dra. Heredia Concepcion / GINECOLOGÍA Y OBSTETRICIA</option>
                <option value="Dr. Carlos Salinas / PEDIATRÍA-NEONATOLOGÍA">Dr. Carlos Salinas / PEDIATRÍA-NEONATOLOGÍA</option>
                <option value="Dr. Luis Donaldo / OFTALMOLOGÍA">Dr. Luis Donaldo / OFTALMOLOGÍA</option>                    

                <input type="submit" class="btn" name="register" value="REGISTRAR CITA">
               
                
</section>
	<section class="principal">
		<h1>CONSULTA DE CITAS PROGRAMADAS</h1>
		<div class="form-1-2">
			<label for="caja_busqueda">Buscador:</label>
			<input type="text" name="caja_busqueda" id="caja_busqueda"></input>
		</div>
		<div id="datos">
			
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
	<script src="js/main.js"></script>




	

<?php
                include("subir.php");
                include("eliminar.php");
                include("modi.php");
             

				
               
                
            
                ?>

</body>
</html>