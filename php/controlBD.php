<?php 
 
	$mysqli= new mysqli("localhost","root","", "catalogo");

	/* Verificar la conexion*/
	if ($mysqli -> connect_errno){
		printf("Conexiones fallida: %s\n",$mysqli -> connect_error);
		exit();
	}


	function InsertarCliente($cedula,$nombre,$apellido,$telefono){/*Metodo ingresa un nuevo cliente*/

	}

	function InsertarPrestamo($id_juego,$id_cliente,$tiempo){/*Metodo ingresa un nuevo prestamo*/

	}

	function ConsultaSQL($consulta){/*Metodo realiza una consulta sql*/
		if($resultado = $mysqli -> query($consulta)){
			echo json_encode(array("respuesta"=>true));
		/* Liberar el conjuntos de resultados */
		}else{
			echo json_encode(array("respuesta"=>false));
		}
		/* cerrar conexion */
		$mysqli -> close();	
	}


	/*
	if (isset($_GET['nombre']) && isset($_GET['cedula'])){
		$nombre = $_GET['nombre'];
		$cedula = $_GET['cedula'];
		
	}*/
		

	/* cerrar conexion */
	$mysqli -> close();

?>
