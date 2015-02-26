<!DOCTYPE html>
<html lang="es" id="todo">
 
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
	<header id="Titulo">
		<img src="img/BANNER.png" id="Banner" >
	</header><!--Termina header del body-->
	<section id="Juegos">
		<header >
			<table >
				<tr>
					<td>
						<h1>Prestamo de VideoJuegos Online</h1>
					</td>
					<td>
						<button type="button" onclick="location.href='php/carrito.php'">
							<img src="img/carro.png" width="50" heigth="50">
						</button>
					</td>
				</tr>
			</table>
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
					<article><hr></hr></article>
					<article class='producto'>
						<header>
							<div ALIGN=center >".$fila["Nombre"]."</div>
						</header>
						<table id='tabla'>
						<tr>
							<td>
								<img  src=".$fila["Imagen"]." width='100' heigth='100'></img>
							</td>
							<td>
								<p>".$fila["Descripcion"]."</p>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div ALIGN=left>Cantidad:".$fila["Cantidad"]."</div>
								<div ALIGN=left>Precio por dia: $".$fila["Precio"]."</div>
								<label name='agregar2'>Agregar al carrito:</label>
								<input type='text' id='cantidad".$fila["Id_Juego"]."' size='1' maxlength='2' ></input>
								<button type='button' id=".$fila["Id_Juego"]." onclick='AgregarCarrito(this.id)'>Ok</button>
							</td>
						</tr>
						</table>

					</article>
					<article><hr></hr></article>
					";
			}
		$resultado->free();
		}
		$mysqli->close();
	

		?>

	</section><!--Termina secction -->

	<aside id="asideIndex">
		<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script> 
		<table border="0" bgcolor="#3D700B" cellspacing=1 cellpadding=3 class="clock24st" style="line-height:14px; padding:0;"> 
		<tr><td bgcolor="#88ED23" class="clock24std" style="font-family:arial; font-size:12px;"><a href="http://www.24webclock.com/de/"><img src="http://www.24webclock.com/ico.gif" width="14" height="14" border="0" alt="gratis uhren für homepage" align="left" hspace="2"></a> <a href="http://www.24webclock.com/es/" style="text-decoration:none;"><span class="clock24s" id="clock24_48434" style="color:#3D700B;">relojes web</span></a></td></tr> 
		</table> 
		<script type="text/javascript"> 
		var clock24_48434 = new clock24('48434',-180,'%M / %dd / %yyyy %W %HH:%nn:%ss %P','es'); 
		clock24_48434.daylight('AR'); clock24_48434.refresh(); 
		</script> 
		
	</aside><!--Termina aside-->

	<footer>
		<img src="img/FOOTER.png"  >
	</footer><!--Termina Footer -->
</body><!--termina body de la pagina index-->

</html>