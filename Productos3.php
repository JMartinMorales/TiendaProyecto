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


<section class="form-fabulo">
<form method="post">
	<div class="product-container">
		<h3>Fabuloso 1lt</h3>
		<img src="img/Fabuloso.png" />
		<h1>$25</h1>
		<input type="submit" class="button-add" name="fabulo" value="AGREGAR">
	</div>
	</section>


	<section class="form-pino">
<form method="post">
	<div class="product-container">
		<h3>Pinol 1lt</h3>
		<img src="img/pinol.jpg" />
		<h1>$13</h1>
		<input type="submit" class="button-add" name="pino" value="AGREGAR">
	</div>
	</section>


	<section class="form-clo">
<form method="post">
	<div class="product-container">
		<h3>Cloralex 1lt</h3>
		<img src="img/clo.jpg" />
		<h1>$14</h1>
		<input type="submit" class="button-add" name="clo" value="AGREGAR">
	</div>
	</section>

	<section class="form-rom">
<form method="post">
	<div class="product-container">
		<h3>Jabon en polbo Roma 1kg</h3>
		<img src="img/ro.jpg" />
		<h1>$12</h1>
		<input type="submit" class="button-add" name="rom" value="AGREGAR">
	</div>
	</section>


	<section class="form-123">
<form method="post">
	<div class="product-container">
		<h3>Jabon el polbo 123 1kg</h3>
		<img src="img/123.jpg" />
		<h1>$15</h1>
		<input type="submit" class="button-add" name="123" value="AGREGAR">
	</div>
	</section>


	<section class="form-suav">
<form method="post">
	<div class="product-container">
		<h3>Suavitel 1lt</h3>
		<img src="img/sua.jpg" />
		<h1>$18</h1>
		<input type="submit" class="button-add" name="suav" value="AGREGAR">
	</div>
	</section>


	<section class="form-zote">
<form method="post">
	<div class="product-container">
		<h3>Jabon Zote 400g</h3>
		<img src="img/xo.jpg" />
		<h1>$8</h1>
		<input type="submit" class="button-add" name="zote" value="AGREGAR">
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