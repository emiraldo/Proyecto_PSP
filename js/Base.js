function AgregarCarrito(IdJuego){
	var Idjuego=IdJuego;
	var cantidad = document.getElementById("cantidad"+IdJuego)
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


 