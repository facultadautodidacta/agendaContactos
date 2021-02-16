<?php 

require_once "../../clases/Categorias.php";

$idCategoria = $_POST['idCategoria'];

$Categorias = new Categorias();
echo $Categorias->eliminaCategoria($idCategoria);