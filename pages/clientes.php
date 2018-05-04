<?php require_once '../controllers/usuario/check.php'; ?>
<?php require_once 'layout/head.php'; ?>
<?php require_once 'layout/nav.php'; ?>
<?php require_once '../controllers/clientes/allClientes.php';?>
<?php require_once '../views/clientes/nuevo.phtml';?>
<?php require_once '../views/clientes/editar.phtml';?>

	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<a href="#" onclick="nuevoCliente();">Nuevo cliente</a>
		<table class="table table-responsive">
			<tr>
				<th>Id</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Correo</th>
				<th>Razon Social</th>
				<th>Telefono</th>
				<th>RIF</th>
				<th>Dirección</th>
				<th>Opciones</th>
			</tr>
			<?php for($i=0; $i<count($clientes); $i++){ $rs = $clientes[$i]; ?>
			<tr>
				<td><?php echo $rs['id_cliente']; ?></td>
				<td><?php echo $rs['nombres']; ?></td>
				<td><?php echo $rs['apellidos']; ?></td>
				<td><?php echo $rs['correo']; ?></td>
				<td><?php echo $rs['razon_social']; ?></td>
				<td><?php echo $rs['telefono']; ?></td>
				<td><?php echo $rs['rif']; ?></td>
				<td><?php echo $rs['direccion']; ?></td>
				<td>
					<a href="#" onclick="editarCliente(this);" title="Editar cliente" class="btn btn-default glyphicon glyphicon-edit"></a>
					
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 pull-right">
		<?php require_once '../views/publicidad/publicidad.php'; ?>
	</div>
<?php require_once 'layout/footer.php'; ?>