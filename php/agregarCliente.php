<?php 
 
	$mysqli= new mysqli("localhost","root","", "catalogo");
	$nombre="";
	$apellido="";
	$cedula="";
	$telefono="";
	if (isset($_GET['Cedula']) && isset($_GET['Nombre']) && isset($_GET['Apellido']) && isset($_GET['Telefono']) ){
		$nombre=$_GET['Nombre'];
		$apellido=$_GET['Apellido'];
		$cedula=$_GET['Cedula'];
		$telefono=$_GET['Telefono'];
	}

	/* Verificar la conexion*/
	if ($mysqli -> connect_errno){
		printf("Conexiones fallida: %s\n",$mysqli -> connect_error);
		exit();
	}
	$consulta="Insert into Cliente (Cedula,Nombre,Apellido,Telefono) values('$cedula','$nombre','$apellido','$telefono')";
	if($resultado = $mysqli -> query($consulta)){
		echo json_encode(array("respuesta"=>true));
			
		/* Liberar el conjuntos de resultados */
	}else{
		echo json_encode(array("respuesta"=>false));
	}

	/* cerrar conexion */
	$mysqli -> close();

?>
