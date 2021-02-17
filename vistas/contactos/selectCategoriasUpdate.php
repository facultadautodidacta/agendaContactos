<?php 
	
	require_once "../../clases/Conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

	$idCategoria = $_GET['idCategoria'];

	$sql = "SELECT id_categoria,
					nombre 
			FROM t_categorias 
			ORDER BY nombre";
	$result = mysqli_query($conexion, $sql);
 ?>
 	<label for="idCategoriaSelectU">Selecciona una categoria</label>
 	<select id="idCategoriaSelectU" name="idCategoriaSelectU" class="form-control">
 	<?php 
 		while($ver = mysqli_fetch_row($result)): 
 			if ($ver[0] == $idCategoria) {
 	?>
 			<option selected="" value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
 	<?php  
 			} else {
 	?>
 			<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
 	<?php  
 			}
 	?>	
 	<?php endwhile; ?>
 	</select>