<!DOCTYPE html> 
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../js/Base.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<title>Carrito Cliente</title>	
</head><!--termina head de la pagina index-->
<nav>
	<!-- Nav sin usar pero declarado-->
</nav>

<body>
	<header id="Titulo">
		<img src="../img/BANNER.png" id="Banner" >
	</header><!--Termina header del body-->
	<section >
		<header >
			<h1 id="TituloCarrito">Carrito Cliente: </h1>
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
							<article><hr></hr></article>
							<article class='productoCarrito'>
					  			<header>
									<DIV ALIGN=left>".$fila1["Nombre"]."</div>
								</header>
								<table id='tabla'>
									<tr>
										<td>
					  						<img src='../".$fila1["Imagen"]."' width='100' heigth='100'></img>
					  					</td>
					  					<td>
					  						<p id='Descipcion'>Descipcion: ".$fila1["Descripcion"]."</p>
					  					</td>
					  				</tr>
									<tr>
										<td></td>
										<td>
					  						<p>Cantidad a prestar: ".$fila["cantidad"]."</p>
											<label name='agregar3'>Tiempo del prestamo (dias) :</label>
											<input type='text' id='tiempo".$fila1["Id_Juego"]."' size='1' maxlength='2' ></input>
											<button type='button' id='BTiempo".$fila1["Id_Juego"]."' onclick='AgregarTiempoCarrito(".$fila1["Id_Juego"].")' >Ok</button>					  		
										</td>
									</tr>
								</table>
							</article>
							<article><hr></hr></article>
							";	
						}
			}
		$resultado->free();
		}
		$mysqli->close();
		

		?>
		<article id="Formulario">

		</article>

	</section><!--Termina secction -->

	<aside id="asideCarrito">
		<!--Aside sin usar pero declarado -->
		<header><h1>Registrar datos :</h1></header>
		<table >	
			<tr>
				<td>
					<label name='Nombre' >Nombre</label>	
					<label name='Apellido'>Apellido</label>
					<label name='Cedula'>Cedula</label>	
					<label name='Telefomno'>Telefono</label>
				</td>
				<td>
					<input type='text' id="TNombre" size='10' ></input>			
					<input type='text' id="TApellido" size='10' ></input>			
					<input type='text' id="TCedula" size='10' ></input>
					<input type='text' id="TTelefono" size='10' ></input>
				</td>

			</tr>
		</table>
		<button type="button" id="BRegistrar" onclick="AgregarCliente()" >Registrar</button>
	</aside><!--Termina aside-->

	<footer>
		<img src="../img/FOOTER.png"  >
	</footer><!--Termina Footer -->
</body><!--termina body de la pagina index-->

</html>