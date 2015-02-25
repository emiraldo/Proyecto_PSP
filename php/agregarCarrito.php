<?php  
 
	$mysqli= new mysqli("localhost","root","", "catalogo");
	$datos = array();
	$id_juego = "";
	$cantidad = "";
	if (isset($_GET['id_juego']) && isset($_GET['cantidad'])){
		$id_juego = $_GET['id_juego'];
		$cantidad = $_GET['cantidad'];
		
	}

	/* Verificar la conexion*/
	if ($mysqli -> connect_errno){
		printf("Conexiones fallida: %s\n",$mysqli -> connect_error);
		exit();
	}
	
	$consulta ="Insert into Carrito (id_juego,cantidad) values ('$id_juego','$cantidad')";

	if($resultado = $mysqli -> query($consulta)){
		
		echo json_encode(array("respuesta"=>true));
		
		/* Liberar el conjuntos de resultados */
	}else{
		echo json_encode(array("respuesta"=>false));
	}

	/* cerrar conexion */
	$mysqli -> close();

?>
