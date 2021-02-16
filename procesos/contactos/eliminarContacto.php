<?php 

	require_once "../../clases/Contactos.php";
	$Contactos = new Contactos();
	$idContacto = $_POST['idContacto'];

	echo $Contactos->eliminarContacto($idContacto);
 ?>