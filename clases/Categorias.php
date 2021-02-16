<?php 

	require_once "Conexion.php";

	class Categorias extends Conexion {
		public function agregarCategoria($datos) {
			$conexion = Conexion::conectar();
			$sql = "INSERT INTO t_categorias (nombre, descripcion) 
					VALUES (?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('ss', $datos['nombre'],
									 $datos['descripcion']);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function eliminaCategoria($idCategoria) {
			$conexion = Conexion::conectar();
			$sql = "DELETE FROM t_categorias WHERE id_categoria = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idCategoria);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function obtenerDatosCategoria($idCategoria) {
			$conexion = Conexion::conectar();
			$sql = "SELECT id_categoria,
							nombre,
							descripcion 
					FROM t_categorias 
					WHERE id_categoria = '$idCategoria'";
			$result = mysqli_query($conexion, $sql);
			$categoria = mysqli_fetch_array($result);

			$datos = array(
					 "idCategoria" => $categoria['id_categoria'],
					 "nombre" => $categoria['nombre'],
					 "descripcion" => $categoria['descripcion']
							);
			return $datos;
		}

		public function actualizarCategoria($datos) {
			$conexion = Conexion::conectar();

			$sql = "UPDATE t_categorias SET nombre = ?, 
											descripcion = ? 
					WHERE id_categoria = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('ssi', $datos['nombre'],
									  $datos['descripcion'],
									  $datos['idCategoria']);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}
 ?>