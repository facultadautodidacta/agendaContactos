<?php 
	require_once "Conexion.php";

	class Contactos extends Conexion {
		public function agregarContacto($datos) {
			$conexion = Conexion::conectar();

			$sql = "INSERT INTO t_contactos (id_categoria,
											nombre,
											paterno,
											materno,
											telefono,
											email)
					VALUES (?, ?, ?, ?, ?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('isssss', $datos['idCategoria'],
										 $datos['nombre'],
										 $datos['paterno'],
										 $datos['materno'],
										 $datos['telefono'],
										 $datos['email']);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function eliminarContacto($idContacto) {
			$conexion = Conexion::conectar();

			$sql = "DELETE FROM t_contactos WHERE id_contacto = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idContacto);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}

 ?>