<?php namespace views;
  $sesion = new Sesion();
  $usuario = $sesion->get("usuario");
  if( $usuario == false ) {
    // si no se ha iniciado sesión redirecciona a la pagina login.php
    require_once(ROOT . "views" . DS . "login.php");
  }elseif($usuario != "admin"){
    require_once(ROOT . "views" . DS . "menu.php");
    echo "<h2 class='text-center'>Acceso denegado</h2>";
  }else{
    // Aquí va el contenido de la pagina qu se mostrara en caso de que se haya iniciado sesion
    require_once(ROOT . "views" . DS . "menu.php");
?>
<div class="box-segundario">
	<h3 class="text-center">Editar Institucion<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<he class="panel-title">Editar institucion <?php echo $datos['descripcion']; ?></he>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="" class="form-horizontal" method="POST">
						<input value="<?php echo $datos['idInstitucion']; ?>" name="id" type="hidden">
						<div class="form-group">
							<label for="inputDescripcion" class="control-label">Descripcion</label>
							<input type="text" class="form-control text-capitalize" value="<?php echo $datos['descripcion']; ?>" name="descripcion" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
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
