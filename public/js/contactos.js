$(document).ready(function(){
	$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');

	$('#btnAgregarContacto').click(function(){
		agregarContacto();
	});
});


function agregarContacto(){
	$.ajax({
		type: "POST",
		url: "procesos/contactos/agregarContacto.php",
		data: $('#frmAgregarContacto').serialize(),
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarContacto')[0].reset();
				$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}

function eliminarContacto(idContacto) {
	swal({
		title: "¿Esta seguro de eliminar este contacto?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"idContacto=" + idContacto,
				url:"procesos/contactos/eliminarContacto.php",
				success:function(respuesta){
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
						swal(":D","Se elimino con exito!","success");
					} else {
						swal(":(","No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}