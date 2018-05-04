<?php require_once '../controllers/usuario/check.php'; ?>
<?php require_once '../controllers/usuario/isAdmin.php'; ?>
<?php require_once 'layout/head.php'; ?>
<?php require_once 'layout/nav.php'; ?>
<?php require_once '../controllers/usuario/allUsuarios.php';?>
<?php require_once '../views/usuarios/nuevo.phtml';?>
<?php require_once '../views/usuarios/editar.phtml';?>

	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<a href="#" onclick="nuevoUsuario();">Nuevo usuario</a>
		<table class="table table-responsive">
			<tr>
				<th>Id</th>
				<th>Cuenta</th>
				<th>Rol</th>
				<th>Fecha</th>
				<th>Opciones</th>
			</tr>
			<?php for($i=0; $i<count($usuarios); $i++){ $rs = $usuarios[$i]; ?>
			<tr>
				<td><?php echo $rs['id_usuario']; ?></td>
				<td><?php echo $rs['cuenta']; ?></td>
				<td><?php echo $rs['rol']; ?></td>
				<td><?php echo $rs['fecha_log']; ?></td>
				<td>
					<a href="#" onclick="editUsuario(this);" title="Editar perfil" class="btn btn-default glyphicon glyphicon-edit"></a>
					<a href="#" onclick="delUsuario(this);" title="Eliminar usuario" class="btn btn-default glyphicon glyphicon-trash"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 pull-right">
		<?php require_once '../views/publicidad/publicidad.php'; ?>
	</div>
<?php require_once 'layout/footer.php'; ?>