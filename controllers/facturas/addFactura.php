<?php 
session_start();
require_once '../../models/factura.php';
require_once '../../models/vehiculo.php';
require_once '../../models/nota_entrega.php';
$factura = new Factura();
$vehiculo = new Vehiculo();
$nota_entrega = new NotaEntrega();
//$usuarios = $usuario->getUsuarioId(base64_decode($_GET['id']));

//for($i=0; $i<count($usuarios); $i++){ $rs = $usuarios[$i]; }

if(!empty($_POST)){
	$repuesto = $_POST['repuesto'];
	$cantidad = $_POST['cantidad'];
	$id_factura = $_POST['factura'];
	$total = $_POST['total'];
	$iva = $_POST['iva'];
	$cliente = $_POST['cliente'];
	$placa = $_POST['placa'] ? $_POST['placa'] : '0';
	$marca = $_POST['marca'] ? $_POST['marca'] : '0';
	$modelo = $_POST['modelo'] ? $_POST['modelo'] : '0';
	$anio = $_POST['anio'] ? $_POST['anio'] : '0';
	$razon_social = $_POST['razon_social'];
	$n_poliza = $_POST['n_poliza'];
	$n_siniestro = $_POST['n_siniestro'];
	$fecha = $_POST['fecha'];
	$estado = $_POST['estado'];

	//Nota entrega
	$codigo = $_POST['codigo'];
	$empresa_envio = $_POST['empresa_envio'];
	$guia = $_POST['guia'];
	$costo_envio = $_POST['costo_envio'];
	$estado_nota = $_POST['estado_nota'];
	$fecha_envio = $_POST['fecha_envio'];

	$factura->addFactura($placa, $_SESSION['id_usuario'], $cliente, $iva, $total, $razon_social, $n_poliza, $n_siniestro, $fecha, $estado);
	
	if(!empty($placa)){
		$vehiculo->addVehiculo($placa, $marca, $modelo, $placa, $anio);
	} 

	if(!empty($codigo)){
		if($factura->getFacturas()[0]['id_factura'] != ''){
			$facturaId = $factura->getFacturas()[0]['id_factura'];
			$nota_entrega->addNotaEntrega($codigo, $facturaId, $empresa_envio, $guia, $costo_envio, $estado_nota, $fecha_envio);
	}
}
	
	// var_dump($_POST);
	// var_dump($factura->getFacturas()[0]['id_factura']);
	if($factura->getFacturas()[0]['id_factura'] != ''){
		$facturaId = $factura->getFacturas()[0]['id_factura'];
		$factura->addFacturaRepuesto($repuesto, $facturaId, $cantidad);
	}
	header("Location: ../../pages/facturas");
}