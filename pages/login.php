<?php require_once 'layout/head.php'; ?>
<?php require_once 'layout/nav.php'; ?>

<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
	<div class="form-group" id="formLogin">
		<form class="form-group" action="../controllers/usuario/login.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="cuenta" placeholder="Colocar usuario">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="clave" placeholder="Colocar clave">
			</div>
			<input type="submit" class="btn btn-primary" value="Entrar">
		</form>
	</div>
</div>
<?php require_once 'layout/footer.php'; ?>