<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/Base.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<title>Carrito Cliente</title>	
</head><!--termina head de la pagina index-->
<nav>
	<!-- Nav sin usar pero declarado-->
</nav>

<body>
	<header>
		<h1>Prestamo de VideoJuegos</h1>
	</header><!--Termina header del body-->
	<section >
		<header >
			<h1>Carrito Cliente: </h1>
		</header>
		<?php
			$mysqli= new mysqli("localhost","root","", "catalogo");

		/* Verificar la conexion*/
		if ($mysqli -> connect_errno){
			printf("Conexiones fallida: %s\n",$mysqli -> connect_error);
			exit();
		}

		$consulta = "SELECT * from Carrito";
		
		if($resultado = $mysqli->query($consulta)){
			while ($fila = $resultado-> fetch_assoc()) {
				$consulta1 = "SELECT * from VideoJuego WHERE Id_Juego=".$fila["id_juego"]."";
						if($resultado1 = $mysqli->query($consulta1)){						
							$fila1 = $resultado1-> fetch_assoc();
							echo "
					  		<h1>".$fila1["Nombre"]."</h1>
					  		<h1>".$fila["cantidad"]."</h1>
							";	
						}
			}
		$resultado->free();
		}
		$mysqli->close();
	

		?>

	</section><!--Termina secction -->

	<aside>
		<!--Aside sin usar pero declarado -->
	</aside><!--Termina aside-->

	<footer>
	</footer><!--Termina Footer -->
</body><!--termina body de la pagina index-->

</html>