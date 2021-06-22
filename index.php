<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>
<body>
    <div class="page-nav">
        <h2>MISELANEA</h2>
    </div>
    <div id="menu">
		<ul>
			<li><a href="index.php">Todo</a></li>
			<li><a href="Productos.php">Ofertas</a></li>
			<li><a href="Productos2.php">Basica</a></li>
			<li><a href="Productos3.php">Limpieza</a></li>
            <li><a href="Productos4.php">Bebidas</a></li>
		</ul>
	</div>
    <img src="img/107831.png" width="40"  height="40" />
    <button type="button" class="btn btn-primary btn-lg" onclick="location.href='http://localhost/proyecto%20final/carro/'" >Carrito</button>
    <div class="page-content">

    <section class="form-mayo">
<form method="post">
        <div class="product-container">
            <h3>Mayonesa</h3>
            <img src="images/product-1.jpg" />
            <h1>$25</h1>
            <input type="submit" class="button-add" name="mayo" value="AGREGAR">
        </div>
        </section>

        <section class="form-dori">
<form method="post">
        <div class="product-container">
            <h3>Doritos Nacho</h3>
            <img src="images/product-2.jpg" />
            <h1>$30</h1>
            <input type="submit" class="button-add" name="dori" value="AGREGAR">
        </div>
        </section>

        <section class="form-fabu">
<form method="post">
        <div class="product-container">
            <h3>Fabuloso 1lt</h3>
            <img src="images/product-3.jpg" />
            <h1>$32</h1>
            <input type="submit" class="button-add" name="fabu" value="AGREGAR">
        </div>
        </section>



        <section class="form-six">
<form method="post">
        <div class="product-container">
            <h3>Six de cerveza corona</h3>
            <img src="images/product-4.jpg" />
            <h1>$50</h1>
            <input type="submit" class="button-add" name="six" value="AGREGAR">
        </div>
        </section>



        <section class="form-azuc">
<form method="post">
        <div class="product-container">
            <h3>Azucar 1kg</h3>
            <img src="images/product-5.jpg" />
            <h1>$22</h1>
            <input type="submit" class="button-add" name="azuc" value="AGREGAR">
        </div>
        </section>


        <section class="form-leche">
<form method="post">
        <div class="product-container">
            <h3>Leche 1lt</h3>
            <img src="images/product-6.jpg" />
            <h1>$16</h1>
            <input type="submit" class="button-add" name="leche" value="AGREGAR">
        </div>
        </section>

    </div>

    <?php
                include("subir.php");
               
              ?>
    
</body>