<?php 

	require_once "../../clases/Contactos.php";
	$Contactos = new Contactos();

	$datos = array(
				"idContacto" => $_POST['idContactoU'],
				"nombre" => $_POST['nombreU'],
				"paterno" => $_POST['apaternoU'],
				"materno" => $_POST['amaternoU'],
				"telefono" => $_POST['telefonoU'],
				"email" => $_POST['emailU'],
				"idCategoria" => $_POST['idCategoriaSelectU']
					);

	echo $Contactos->actualizarContacto($datos);
 ?>