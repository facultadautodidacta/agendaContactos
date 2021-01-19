$(document).ready(function(){

	$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');

});

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