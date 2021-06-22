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

<section class="form-coca">
<form method="post">
	<div class="product-container">
		<h3>Coca-Cola 3lt</h3>
		<img src="img/coca.jpg" />
		<h1>$35</h1>
        <input type="submit" class="button-add" name="coca" value="AGREGAR">
	</div>
    </section>


    <section class="form-pep">
<form method="post">
        <div class="product-container">
            <h3>Pepsi 355ml</h3>
            <img src="img/Pepsi.jpg" />
            <h1>$15</h1>
            <input type="submit" class="button-add" name="pep" value="AGREGAR">
        </div>
        </section>


        <section class="form-fres">
<form method="post">
        <div class="product-container">
            <h3>Fresca 3lt</h3>
            <img src="img/fresca.jpg" />
            <h1>$30</h1>
            <input type="submit" class="button-add" name="fres" value="AGREGAR">
        </div>
        </section>

        <section class="form-fan">
<form method="post">
        <div class="product-container">
            <h3>Fanta 355ml</h3>
            <img src="img/Fanta.jpg" />
            <h1>$15</h1>
            <input type="submit" class="button-add" name="fan" value="AGREGAR">
        </div>
        </section>

        <section class="form-coro">
<form method="post">
        <div class="product-container">
            <h3>Six Cerveza corona 355ml</h3>
            <img src="img/Corona.jpg" />
            <h1>$60</h1>
            <input type="submit" class="button-add" name="coro" value="AGREGAR">
        </div>
        </section>


        <section class="form-teca">
<form method="post">
        <div class="product-container">
            <h3>Tecate 12pack 355ml</h3>
            <img src="img/tecate.jpg" />
            <h1>$80</h1>
            <input type="submit" class="button-add" name="teca" value="AGREGAR">
        </div>
        </section>

</div>

<?php
                include("subir.php");
                              ?>

</body>