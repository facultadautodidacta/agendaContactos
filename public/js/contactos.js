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

function eliminarContacto() {
	swal({
		title: "¿Esta seguro de eliminar este contacto?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Se ha eliminado");
		} 
	});
}