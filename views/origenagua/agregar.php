<?php namespace views;
  $sesion = new Sesion();
  $usuario = $sesion->get("usuario");
  if( $usuario == false ) {
    // si no se ha iniciado sesión redirecciona a la pagina login.php
    require_once(ROOT . "views" . DS . "login.php");
  }else{
    // Aquí va el contenido de la pagina qu se mostrara en caso de que se haya iniciado sesion
    require_once(ROOT . "views" . DS . "menu.php");
?>
<div class="box-segundario">
	<h3 class="text-center">Agregar Cargo<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<he class="panel-title">Agregar un nuevo cargo</he>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="" class="form-horizontal" method="POST" enctype="multipart/from-data">
						<div class="form-group">
							<label for="inputDescripcion" class="control-label">Descripcion</label>
							<input type="text" class="form-control text-capitalize" name="descripcion" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Registrar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
