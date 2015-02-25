function AgregarCarrito(IdJuego){  
	var Idjuego=IdJuego;
	var cantidad = document.getElementById("cantidad"+IdJuego);
	cantidad=cantidad.value;	
	document.getElementById("cantidad"+IdJuego).value=""

	$.ajax({
		url:"php/agregarCarrito.php",
		type:"get",
		data:{id_juego: Idjuego,cantidad:cantidad},
		dataType:"json",
		success:function(data){
			alert("El videojuego ha sido agregado al carrito.")
		}
	});

}


 function AgregarTiempoCarrito(IdJuego){
 	var Idjuego=IdJuego;
 	var tiempo = document.getElementById("tiempo"+IdJuego)
 	tiempo=tiempo.value;

 	$.ajax({
		url:"agregarTiempoCarrito.php",
		type:"get",
		data:{id_juego: Idjuego,Tiempo:tiempo},
		dataType:"json",
		success:function(data){
			alert("Se ha agregado tiempo de prestamo.")
		}
	});
 }

 function AgregarCliente(){
 	var nombre=document.getElementById("TNombre").value;
 	var apellido=document.getElementById("TApellido").value;
 	var telefono=document.getElementById("TTelefono").value;
 	var cedula=document.getElementById("TCedula").value;
 	$.ajax({
		url:"agregarCliente.php",
		type:"get",
		data:{Cedula:cedula,Nombre:nombre,Apellido:apellido,Telefono:telefono},
		dataType:"json",
		success:function(data){
			alert("Se ha registrado el cliente.")
		}
	});
	$.ajax({
		url:"terminarPrestamo.php",
		type:"get",
		data:{id_cliente:cedula},
		dataType:"json",
		success:function(data){
			alert("Prestamo realizado con exito!")
		}
	});		
 }