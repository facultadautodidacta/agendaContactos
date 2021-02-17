<?php 

	require_once "../../clases/Contactos.php";
	$Contactos = new Contactos();
	$idContacto = $_POST['idContacto'];
	echo json_encode($Contactos->obtenerDatosContacto($idContacto));
	
 ?>