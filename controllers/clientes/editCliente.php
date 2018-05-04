<?php 
require_once '../../models/cliente.php';

$cliente = new Cliente();

if(!empty($_POST)){
	$cliente->editCliente($_POST['id_cliente'], $_POST['nombres'], $_POST['apellidos'], $_POST['correo'], $_POST['razon'], $_POST['telefono'], $_POST['rif'], $_POST['direccion']);
	header("Location: ../../pages/clientes");
	//var_dump($_POST);
}