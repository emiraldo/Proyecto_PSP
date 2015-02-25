<?php 
 
	$mysqli= new mysqli("localhost","root","", "catalogo");
	$id_juego = "";
	$tiempo = "";
	if (isset($_GET['id_juego']) && isset($_GET['Tiempo'])){
		$id_juego = $_GET['id_juego'];
		$tiempo = $_GET['Tiempo'];
	}

	/* Verificar la conexion*/
	if ($mysqli -> connect_errno){
		printf("Conexiones fallida: %s\n",$mysqli -> connect_error);
		exit();
	}
	$consulta="Update Carrito set tiempo='$tiempo' where id_juego='$id_juego' ";
	if($resultado = $mysqli -> query($consulta)){
		echo json_encode(array("respuesta"=>true));
			
		/* Liberar el conjuntos de resultados */
	}else{
		echo json_encode(array("respuesta"=>false));
	}

	/* cerrar conexion */
	$mysqli -> close();

?>
