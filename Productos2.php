<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>
<body>
    <div class="page-nav">
        <h2>MISELANEA</h2>
        <a class="link" href="loginvista.html">Iniciar Sesion</a>
    </div>
    <div id="menu">
		<ul>
			<li><a href="index.php">Principal</a></li>
			<li><a href="Productos.php">Ofertas</a></li>
			<li><a href="Productos2.php">Basica</a></li>
			<li><a href="Productos3.php">Limpieza</a></li>
            <li><a href="Productos4.php">Bebidas</a></li>
		</ul>
	</div>
	<img src="img/107831.png" width="40"  height="40" />
	<button type="button" class="btn btn-primary btn-lg" onclick="location.href='http://localhost/proyecto%20final/carro/'" >Carrito</button>
	 

</div>
<div class="page-content">

<section class="form-hue">
<form method="post">
	<div class="product-container">
		<h3>Huevo 12pz</h3>
		<img src="img/Huevos 12.png" />
		<h1>$25</h1>
		<input type="submit" class="button-add" name="hue" value="AGREGAR">
	</div>
	</section>

	<section class="form-acei">
<form method="post">
	<div class="product-container">
		<h3>Aceite Nutrioli 1lt</h3>
		<img src="img/ac.jpg" />
		<h1>$28</h1>
		<input type="submit" class="button-add" name="acei" value="AGREGAR">
	</div>
	</section>


	<section class="form-fri">
<form method="post">
	<div class="product-container">
		<h3>Frjol 1kg</h3>
		<img src="img/Frijol.png" />
		<h1>$20</h1>
		<input type="submit" class="button-add" name="fri" value="AGREGAR">
	</div>
	</section>


	<section class="form-zuca">
<form method="post">
	<div class="product-container">
		<h3>Zucaritas 1.2kg</h3>
		<img src="img/cereal.jpg" />
		<h1>$28</h1>
		<input type="submit" class="button-add" name="zuca" value="AGREGAR">
	</div>
	</section>


	<section class="form-atun">
<form method="post">
	<div class="product-container">
		<h3>Lata de atun</h3>
		<img src="img/atun.jpg" />
		<h1>$12</h1>
		<input type="submit" class="button-add" name="atun" value="AGREGAR">
	</div>
	</section>


	<section class="form-lala">
<form method="post">
	<div class="product-container">
		<h3>Leche 1lt</h3>
		<img src="img/Leche.png" />
		<h1>$17</h1>
		<input type="submit" class="button-add" name="lala" value="AGREGAR">
	</div>
	</section>

</div>

<?php
                include("subir.php");
                              ?>

</body>



























	










	<script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>


	
</html>