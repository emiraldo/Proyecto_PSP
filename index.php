<!DOCTYPE html>
<html lang="es">
 
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/Base.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<title>Catalogo de VideoJuegos</title>	
</head><!--termina head de la pagina index-->
<nav>
	<!-- Nav sin usar pero declarado-->
</nav>

<body>
	<header>
		<h1>Prestamo de VideoJuegos</h1>
	</header><!--Termina header del body-->
	<section id="Juegos">
		<header >
			<label id="labelJuegos" for='carrito' name='agregar1' size="4">VideoJuegos Disponibles:</label>
			<button type="button" name="carrito"  id="Carrito" onclick="location.href='php/carrito.php'">CARRITO</button>
		</header>
		<?php
			$mysqli= new mysqli("localhost","root","", "catalogo");

		/* Verificar la conexion*/
		if ($mysqli -> connect_errno){
			printf("Conexiones fallida: %s\n",$mysqli -> connect_error);
			exit();
		}

		$consulta = "SELECT * from VideoJuego";
		
		if($resultado = $mysqli->query($consulta)){
			while ($fila = $resultado-> fetch_assoc()) {
				echo  "
					<article class='producto'  >
						<header>
							<DIV ALIGN=center>".$fila["Nombre"]."</div>
						</header>
						<img id='imgProducto' src=".$fila["Imagen"]." width='100' heigth='100'></img>
						<div ALIGN=center>Cantidad:".$fila["Cantidad"]."</div>
						<div ALIGN=center>Precio por dia: $".$fila["Precio"]."</div>
						<label name='agregar2'>Agregar al carrito:</label>
						<input type='text' id='cantidad".$fila["Id_Juego"]."' size='1' maxlength='2' ></input>
						<button type='button' id=".$fila["Id_Juego"]." onclick='AgregarCarrito(this.id)'>Ok</button>
					</article>

					";
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
		<p>Footer</p>
	</footer><!--Termina Footer -->
</body><!--termina body de la pagina index-->

</html>