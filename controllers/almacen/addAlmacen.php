<?php 
require_once '../../models/almacen.php';
$almacen = new Almacen();
//$usuarios = $usuario->getUsuarioId(base64_decode($_GET['id']));

//for($i=0; $i<count($usuarios); $i++){ $rs = $usuarios[$i]; }

if(!empty($_POST)){
	$almacen->addAlmacen($_POST['descripcion'], $_POST['marca'], $_POST['precio_unitario'], $_POST['stock']);
	header("Location: ../../pages/almacen");
	//var_dump($_POST);
}