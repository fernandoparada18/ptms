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
	<h3 class="text-center">Agregar Docentes<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<he class="panel-title">Agregar un nuevo docente</he>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="" class="form-horizontal" method="POST" enctype="multipart/from-data">
						<div class="form-group">
							<label for="inputCedula" class="control-label">Cedula</label>
							<input type="text" class="form-control" name="cedula" required>
						</div>
						<div class="form-group">
							<label for="inputNombres" class="control-label">Nombres</label>
							<input type="text" class="form-control" name="nombres" required>
						</div>
						<div class="form-group">
							<label for="inputApellidos" class="control-label">Apellidos</label>
							<input type="text" class="form-control" name="apellidos" required>
						</div>
						<div class="form-group">
							<label for="inputTelefono" class="control-label">Telefono</label>
							<input type="text" class="form-control" name="telefono" required>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Correo</label>
							<input type="email" class="form-control" name="email" required>
						</div>
						<div class="form-group">
							<label for="inputIdUsuario" class="control-label">Nombre de Usuario</label>
							<select name="idUsuario" class="form-control">
								<?php while($row = mysqli_fetch_array($datos)){ ?>
										<option value="<?php echo $row['idUsuario']; ?>"><?php echo $row['user']; ?></option>
								<?php } ?>
										<option value="3">inactivo</option>
							</select>
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
<br>
<?php } ?>
