<?php 
require_once '../../models/cliente.php';
$cliente = new Cliente();
//$usuarios = $usuario->getUsuarioId(base64_decode($_GET['id']));

//for($i=0; $i<count($usuarios); $i++){ $rs = $usuarios[$i]; }

if(!empty($_POST)){
	$cliente->addCliente($_POST['nombres'], $_POST['apellidos'], $_POST['correo'], $_POST['razon'], $_POST['telefono'], $_POST['rif'], $_POST['direccion']);
	header("Location: ../../pages/clientes");
	//var_dump($_POST);
}