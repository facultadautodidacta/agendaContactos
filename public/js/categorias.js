$(document).ready(function(){

	$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
	
	$('#btnGuardarCategoria').click(function(){
		agregarCategoria();
	});

});


function agregarCategoria() {
	$.ajax({
		type:"POST",
		data:$('#frmAgregarCategoria').serialize(),
		url: "procesos/categorias/agregarCategoria.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarCategoria')[0].reset();
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}

function eliminarCategoria() {
	swal({
		title: "¿Esta seguro de eliminar esta categoria?",
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