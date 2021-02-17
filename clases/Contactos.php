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

		public function obtenerDatosContacto($idContacto) {
			$conexion = Conexion::conectar();

			$sql = "SELECT id_categoria,
							nombre,
							paterno,
							materno,
							telefono,
							email,
							id_contacto  
					FROM t_contactos 
					WHERE id_contacto = '$idContacto'";
			$result = mysqli_query($conexion, $sql);

			$contacto = mysqli_fetch_array($result);

			$datos = array(
						"id_contacto" => $contacto['id_contacto'],
						"id_categoria" => $contacto['id_categoria'],
						"nombre" => $contacto['nombre'],
						"paterno" => $contacto['paterno'],
						"materno" => $contacto['materno'],
						"telefono" => $contacto['telefono'],
						"email" => $contacto['email'] 
							);
			return $datos;
		}

		public function actualizarContacto($datos) {
			$conexion = Conexion::conectar();

			$sql = "UPDATE t_contactos SET id_categoria = ?, 
										   nombre = ?,
										   paterno = ?,
										   materno = ?,
										   telefono = ?,
										   email = ? 
					WHERE id_contacto = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('isssssi', $datos['idCategoria'],
										  $datos['nombre'],
										  $datos['paterno'],
										  $datos['materno'],
										  $datos['telefono'],
										  $datos['email'],
										  $datos['idContacto']);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}

 ?>