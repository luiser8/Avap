<?php 

require_once '../models/almacen.php';

	$almacen = new Almacen();
	$repuestos = $almacen->getAlmacen();
	//json_encode($almacen->getAlmacen(), JSON_NUMERIC_CHECK);