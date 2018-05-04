<?php require_once '../controllers/usuario/check.php'; ?>
<?php require_once '../controllers/usuario/isAdmin.php'; ?>
<?php require_once 'layout/head.php'; ?>
<?php require_once 'layout/nav.php'; ?>
<?php require_once '../controllers/almacen/allAlmacen.php';?>
<?php require_once '../views/almacen/nuevo.phtml';?>
<?php require_once '../views/almacen/editar.phtml';?>

	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<a href="#" onclick="nuevoRepuesto();">Nuevo repuesto</a>
		<table class="table table-responsive" id="tablaRepuesto">
			<tr>
				<th>Id</th>
				<th>Marca</th>
				<th>Descripción</th>
				<th>Precio unitario</th>
				<th>Stock</th>
				<th>Opciones</th>
			</tr>
			<?php for($i=0; $i<count($repuestos); $i++){ $rs = $repuestos[$i]; ?>
			<tr>
				<td><?php echo $rs['id_repuesto']; ?></td>
				<td><?php echo $rs['marca']; ?></td>
				<td><?php echo $rs['descripcion']; ?></td>
				<td><?php echo $rs['precio_unitario']; ?></td>
				<td><?php echo $rs['stock']; ?></td>
				<td>
					<a href="#" onclick="editarRepuesto(this);" title="Editar repuesto" class="btn btn-default glyphicon glyphicon-edit"></a>
					<a href="#" onclick="delRepuesto(this);" title="Eliminar repuesto" class="btn btn-default glyphicon glyphicon-trash"></a>		
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 pull-right">
		<?php require_once '../views/publicidad/publicidad.php'; ?>
	</div>
<?php require_once 'layout/footer.php'; ?>