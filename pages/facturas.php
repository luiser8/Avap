<?php require_once '../controllers/usuario/check.php'; ?>
<?php require_once '../controllers/usuario/isAdmin.php'; ?>
<?php require_once 'layout/head.php'; ?>
<?php require_once 'layout/nav.php'; ?>
<?php require_once '../controllers/facturas/allFacturas.php';?>
<?php require_once '../controllers/clientes/allClientes.php';?>
<?php require_once '../controllers/almacen/allAlmacen.php';?>
<?php require_once '../views/facturas/nuevo.phtml';?>


	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<a href="./crearFactura" onclick="/*nuevaFactura();*/">Nueva factura</a>
		<table class="table table-responsive" id="tablaFactura">
			<tr>
				<th>Id</th>
				<th>Cliente</th>
				<th>Nro Poliza</th>
				<th>Nro Siniestro</th>
				<th>IVA</th>
				<th>Total</th>
				<th>Fecha</th>
				<th>Estado</th>
				<th>Opciones</th>
			</tr>
			<?php for($i=0; $i<count($facturas); $i++){ $rs = $facturas[$i]; ?>
			<tr>
				<td><?php echo $rs['id_factura']; ?></td>
				<td><?php echo $rs['correo']; ?></td>
				<td><?php echo $rs['n_poliza']; ?></td>
				<td><?php echo $rs['n_siniestro']; ?></td>
				<td><?php echo $rs['iva']; ?></td>
				<td><?php echo $rs['total']; ?></td>
				<td><?php echo $rs['fecha']; ?></td>
				<td>
					<?php if($rs['estado'] == '1'){
						echo 'Pagada';
					}else if($rs['estado'] == '2'){
						echo 'No pagada';
					}else{
						echo 'Anulada';
					} ?>
				</td>
				<td>
					<a href="#" onclick="editarFactura(this);" title="Editar factura" class="btn btn-default glyphicon glyphicon-edit"></a>
					<a href="#" onclick="delFactura(this);" title="Eliminar factura" class="btn btn-default glyphicon glyphicon-trash"></a>		
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
<?php require_once 'layout/footer.php'; ?>