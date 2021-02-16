

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover table-condensed" id="tablaCategoriasDT">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td>
							<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizarCategoria">
								<span class="fas fa-edit"></span>
							</span>
						</td>
						<td>
							<span class="btn btn-danger btn-sm" onclick="eliminarCategoria()">
								<span class="far fa-trash-alt"></span>
							</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaCategoriasDT').DataTable();
	});
</script>