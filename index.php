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
		<table border="0" cellpadding="0">
  		<tr>
    		<td width="100%"><img src="img/log.jpg" width="240" height="160" name="photoslider"></td>
  		</tr>
  		<tr>
    		<td width="100%"><form method="POST" name="rotater">
      			<div align="center"><center><p><!--webbot bot="HTMLMarkup" startspan --><script language="JavaScript1.1">
				var photos=new Array()
				var which=0

				photos[0]="img/COD.jpg"
				photos[1]="img/GTAV.jpg"
				photos[2]="img/L4D2.jpg"
				photos[3]="img/CODG.jpg"
				photos[4]="img/FC4.jpg"
				photos[5]="img/GOW3.jpg"
				photos[6]="img/PES2015.jpg"
				photos[6]="img/FIFA15.jpg"

				function backward(){
					if (which>0){
						window.status=''
						which--
						document.images.photoslider.src=photos[which]
					}
				}

				function forward(){
					if (which<photos.length-1){
						which++
						document.images.photoslider.src=photos[which]
					}
					else window.status='End of gallery'
					}
					</script><!--webbot
      				bot="HTMLMarkup" endspan --><input type="button" value="<<Back" name="B2"
      				onClick="backward()"> <input type="button" value="Next>>" name="B1"
      				onClick="forward()"><br>
      				</p>
      				</center></div>
    			</form>
    		</td>
  		</tr>
	</table>
	</aside><!--Termina aside-->

	<footer>
		<img src="img/FOOTER.png"  >
	</footer><!--Termina Footer -->
</body><!--termina body de la pagina index-->

</html>