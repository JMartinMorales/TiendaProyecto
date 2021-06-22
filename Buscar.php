<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "tienda";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM carrito ORDER By producto";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
  		$query = "SELECT * FROM carrito WHERE  Producto LIKE '%$q%' OR precio LIKE '$q' OR medida LIKE'$q' OR codigo LIKE'$q'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr num='titulo'>
    					
    					<td>PRODUCTO AGREGADO</td>
    					<td>PRECIO POR UNIDAD</td>
		                <td>MEDIDA DEL PRODUCTO(g, Klg, ml, L)</td>
						<td>CODIGO DEL PRODUCTO</td>
				
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					
    					<td>".$fila['Producto']."</td>
    					<td>".$fila['precio']."</td>				
                        <td>".$fila['medida']."</td>
						<td>".$fila['codigo']."</td>
					
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>