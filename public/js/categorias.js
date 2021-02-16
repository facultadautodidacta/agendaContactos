$(document).ready(function(){

	$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
	
	$('#btnGuardarCategoria').click(function(){
		agregarCategoria();
	});

	$('#btnActualizarCategoria').click(function(){
		actualizarCategoria();
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
				$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}

function eliminarCategoria(idCategoria) {
	swal({
		title: "¿Esta seguro de eliminar esta categoria?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type: "POST",
				data: "idCategoria=" + idCategoria,
				url: "procesos/categorias/eliminarCategoria.php",
				success:function(respuesta) {
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
						swal(":D","Se elimino con exito!","success");
					} else {
						swal(":(","No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}

function obtenerDatosCategoria(idCategoria) {
	$.ajax({
		type:"POST",
		data:"idCategoria=" + idCategoria,
		url:"procesos/categorias/obtenerDatosCategoria.php",
		success:function(respuesta) {
			respuesta = jQuery.parseJSON(respuesta);

			$('#idCategoria').val(respuesta['idCategoria']);
			$('#nombreCategoriaU').val(respuesta['nombre']);
			$('#descripcionU').val(respuesta['descripcion']);
		}
	});
}

function actualizarCategoria() {
	$.ajax({
		type:"POST",
		data:$('#frmActualizarCategoria').serialize(),
		url: "procesos/categorias/actualizarCategoria.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
				swal(":D","Se actualizo con exito!","success");
			} else {
				swal(":(","No se pudo actualizar!","error");
			}
		}
	});
}