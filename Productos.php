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

			
<div class="page-content">


<section class="form-arroz">
<form method="post">
	<div class="product-container">
		<h3>Arroz 500gr</h3>
		<img src="img/IMG_5835.png" />
		<h1>De $25 a $23</h1>
		<input type="submit" class="button-add" name="arroz" value="AGREGAR">
		
		
	</div>
	</section>

	<section class="form-cagua">
	<form method="post">
	<div class="product-container">
		<h3>Caguama Miller</h3>
		<img src="img/cervezapro.jpg" />
		<h1>2 X $50</h1>
		<input type="submit" class="button-add" name="cagua" value="AGREGAR">
	</div>
	</section>

	<section class="form-azu">
	<form method="post">
	<div class="product-container">
		<h3>Azucar</h3>
		<img src="img/promoaz.jpg" />
		<h1>De $22 a $20</h1>
		<input type="submit" class="button-add" name="azu" value="AGREGAR">
	</div>
	</section>

	<section class="form-hari">
	<form method="post">
	<div class="product-container">
		<h3>Harina 1kg</h3>
		<img src="img/ha.jpg" />
		<h1>De $18 a $15</h1>
		<input type="submit" class="button-add" name="hari" value="AGREGAR">
	</div>
	</section>

</div>
<?php
                include("subir.php");
                              ?>

</body>

</html>


























	










	<script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>


	
</html>