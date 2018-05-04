<?php 
require_once '../../models/almacen.php';

$almacen = new Almacen();

if(!empty($_POST)){
	$almacen->editAlmacen($_POST['id_repuesto'], $_POST['descripcion'], $_POST['marca'], $_POST['precio_unitario'], $_POST['stock']);
	header("Location: ../../pages/almacen");
	//var_dump($_POST);
}