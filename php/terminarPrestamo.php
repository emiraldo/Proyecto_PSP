<?php  
 
	$mysqli= new mysqli("localhost","root","", "catalogo");
	$id_cliente="";
	if (isset($_GET['id_cliente'])){
		$id_cliente=$_GET['id_cliente'];		
	}

	/* Verificar la conexion*/
	if ($mysqli -> connect_errno){
		printf("Conexiones fallida: %s\n",$mysqli -> connect_error);
		exit();
	}

	$consulta="Select * from Carrito";
	$tiempo="";
	$precio="";
	$cantidad="";
	if($resultado = $mysqli -> query($consulta)){

			while ($fila = $resultado-> fetch_assoc()) {
				$tiempo=(int)($fila["tiempo"]);
				$cantidad=(int)($fila["cantidad"]);

				$consulta1="Select * from VideoJuego where Id_Juego='".$fila["id_juego"]."'";
				if($resultado1 = $mysqli -> query($consulta1)){
					$fila1=$resultado1->fetch_assoc();
					$prec=(double)($fila1["Precio"]);
					$precio=$cantidad*$prec*$tiempo;
					$cant=(int)($fila1["Cantidad"])-(int)($cantidad);
					$consulta2="Insert into Prestamo (id_cliente,id_juego, Pago, Tiempo) values ('$id_cliente','".$fila["id_juego"]."','$precio','$tiempo')";
					if($resultado2 = $mysqli -> query($consulta2)){
						$consul="Update VideoJuego set Cantidad='$cant' where Id_Juego='".$fila["id_juego"]."' ";
						if($resul=$mysqli->query($consul)){
						}
					}
				}
				
			}
		$consulta3="Delete from Carrito";
		if($resultado3=$mysqli->query($consulta3)){
			
		}	

	}else{
		echo json_encode(array("respuesta"=>false));
	}

	

	/* cerrar conexion */
	$mysqli -> close();

?>
