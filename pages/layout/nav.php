<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./">AVAP</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- Perfil -->
			<ul class="nav navbar-nav navbar-right" id="navegacion">
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
					<ul class="dropdown-menu">
           			 <?php if(isset($_SESSION['cuenta'])){ ?>
           				<li><a href="perfil?id=<?php echo base64_encode($_SESSION['id_usuario']); ?>"><b><?php echo $_SESSION['cuenta']; ?></b></a></li>
						<li role="separator" class="divider"></li>

						<li><a href="logout.php"> Salir</a></li> <!--onclick="logout();" -->
           			 <?php }else{ ?>
						<!-- <li><a href="#" onclick="loginmodal();"> Iniciar sesion</a></li> -->
           			 <?php } ?>
          </ul></li>
			</ul>
			<!-- Opciones tareas 1 CONFIGURACION DE SISTEMA-->
			<?php if(isset($_SESSION['cuenta'] )) { ?>
			<ul class="nav navbar-nav navbar-right" id="navegacion">
        	<?php if(isset($_SESSION['rol'] ) == "4" && $_SESSION['rol'] == "4") { ?>
	          <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"	aria-expanded="false"><i class="glyphicon glyphicon-cog"></i><span class="caret"></span></a>

						<ul class="dropdown-menu">
							
							<li><a href="./usuarios"> Gestionar Usuarios</a></li>
							
							<li role="separator" class="divider"></li>
							<li><a href="./almacen"> Gestionar Almacen</a></li>

							<li role="separator" class="divider"></li>
							<li><a href="#!/novedad"> Respaldar base de datos</a></li>


				            <?php } else if(!isset($_SESSION['rol'] ) == "4" && $_SESSION['rol'] != "4"){?>
				                      
				            <li><a href="../site/users"><i class="glyphicon glyphicon-wrench"></i></a></li>
				            
				            <?php } ?>

	          </ul></li>
			</ul><?php } ?>

			<!-- Opciones tareas administrador Y director Administrativo-->
			<?php if(isset($_SESSION['cuenta'] ) && $_SESSION['rol'] == '4') { ?>
			<ul class="nav navbar-nav navbar-right" id="navegacion">
				<li class="dropdown"><a href="" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks"></i><span class="caret"></span></a>

					<ul class="dropdown-menu">
						
						<li role="separator" class="divider"></li>
						<li><a href="./clientes"> Gestionar Clientes</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="./facturas"> Gestionar Factura</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/estado"> Gestionar Nota de Entrega</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/pagos"> Generar Reporte</a></li>

				</ul></li>
			</ul><?php } ?>

				<!-- Opciones tareas director Administrativo-->
			<?php if(isset($_SESSION['cuenta'] ) && $_SESSION['rol'] == '2') { ?>
			<ul class="nav navbar-nav navbar-right" id="navegacion">
				<li class="dropdown"><a href="" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks"></i><span class="caret"></span></a>

					<ul class="dropdown-menu">
						
						<li><a href="#!/pagos"> Generar Reporte</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/facturas"> Gestionar Factura</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/estado"> Gestionar Nota de Entrega</a></li>

				</ul></li>
			</ul><?php } ?>

			<!-- Opciones tareas vendedor-->
			<?php if(isset($_SESSION['cuenta'] ) && ($_SESSION['rol']) == '3') { ?>
			<ul class="nav navbar-nav navbar-right" id="navegacion">
				<li class="dropdown"><a href="" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks"></i><span class="caret"></span></a>

					<ul class="dropdown-menu">
						
						<li><a href="#!/pagos"> Cargar Factura</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/facturas"> Entregar Repuesto</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/estado"> Generar reporte</a></li>

						

				</ul></li>
			</ul><?php } ?>

			<!-- Opciones tareas presidente-->
			<?php if(isset($_SESSION['cuenta'] ) && ($_SESSION['rol']) == '1') { ?>
			<ul class="nav navbar-nav navbar-right" id="navegacion">
				<li class="dropdown"><a href="" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks"></i><span class="caret"></span></a>

					<ul class="dropdown-menu">
						
						<li><a href="#!/pagos"> Generar Reporte</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/facturas"> Gestionar Factura</a></li>

						<li role="separator" class="divider"></li>
						<li><a href="#!/estado"> Gestionar Nota de Entrega</a></li>

				</ul></li>
			</ul><?php } ?>

			<!-- Presentacion -->
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
</div>
<div class="container">