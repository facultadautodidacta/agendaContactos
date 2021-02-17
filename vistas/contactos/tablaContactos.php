
<?php 
	require_once "../../clases/Conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

	$sql = "SELECT 
					    contactos.paterno AS paterno,
					    contactos.materno AS materno,
					    contactos.nombre AS nombre,
					    contactos.telefono AS telefono,
					    contactos.email AS email,
					    categorias.nombre AS categoria,
					    contactos.id_contacto AS idContacto
					FROM
					    t_contactos AS contactos
					        INNER JOIN
					    t_categorias AS categorias 
					ON contactos.id_categoria = categorias.id_categoria";
	$result = mysqli_query($conexion, $sql);
 ?>

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover table-condensed" id="tablaContactosDT">
				<thead>
					<tr>
						<th>Apellido paterno</th>
						<th>Apellido materno</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Categoria</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($mostrar = mysqli_fetch_array($result)) {  
							$idContacto = $mostrar['idContacto'];
					?>
					<tr>
						<td><?php echo $mostrar['paterno'] ?></td>
						<td><?php echo $mostrar['materno'] ?></td>
						<td><?php echo $mostrar['nombre'] ?></td>
						<td><?php echo $mostrar['telefono'] ?></td>
						<td><?php echo $mostrar['email'] ?></td>
						<td><?php echo $mostrar['categoria'] ?></td>
						<td>
							<span class="btn btn-warning btn-sm" onclick="obtenerDatosContacto('<?php echo $idContacto ?>')" data-toggle="modal" data-target="#modalActualizarContacto">
								<span class="fas fa-edit"></span>
							</span>
						</td>
						<td>
							<span class="btn btn-danger btn-sm" onclick="eliminarContacto('<?php echo $idContacto ?>')">
								<span class="far fa-trash-alt"></span>
							</span>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaContactosDT').DataTable();
	});
</script>
