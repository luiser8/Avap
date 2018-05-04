<?php 

require_once '../../models/usuario.php';

$usuario = new Usuario();
$usuario->deleteUsuario($_GET['id']);
header("Location: ../../pages/usuarios");