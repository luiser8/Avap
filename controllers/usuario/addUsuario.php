<?php 
require_once '../../models/usuario.php';
$usuario = new Usuario();

if(!empty($_POST)){
	$usuario->addUsuario($_POST['cuenta'], $_POST['clave'], $_POST['rol']);
	header("Location: ../../pages/usuarios");
	//var_dump($_POST);
}