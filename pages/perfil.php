<?php require_once '../controllers/usuario/check.php'; ?>
<?php require_once 'layout/head.php'; ?>
<?php require_once 'layout/nav.php'; ?>
<?php require_once '../controllers/usuario/usuarioId.php';?>
<?php require_once '../views/perfil/editar.phtml';?>

<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<table class="table table-responsive">
			<tr>
				<th>Id</th>
				<th>Cuenta</th>
				<th>Rol</th>
				<th>Opciones</th>
			</tr>
			<?php for($i=0; $i<count($usuarios); $i++){ $rs = $usuarios[$i]; ?>
			<tr>
				<td><?php echo $rs['id_usuario']; ?></td>
				<td><?php echo $rs['cuenta']; ?></td>
				<td><?php echo $rs['rol']; ?></td>
				<td>
					<a href="#" onclick="editarPerfil(this);" title="Editar perfil" class="btn btn-default glyphicon glyphicon-edit"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
<?php require_once 'layout/footer.php'; ?>