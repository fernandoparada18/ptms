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
	<h3 class="text-center">Agregar Usuario<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<he class="panel-title">Agregar nuevo usuario</he>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="" class="form-horizontal" method="POST" enctype="multipart/from-data">
						<div class="form-group">
							<label for="inputUser" class="control-label">Nombre de Usuario</label>
							<input type="text" class="form-control" name="user" required>
						</div>
            <div class="form-group">
							<label for="inputPassword" class="control-label">Contraseña</label>
							<input type="text" class="form-control" name="password" required>
						</div>
            <div class="form-group">
							<label for="inputidPrivilegio" class="control-label">Privilegio</label>
              <select name="idPrivilegio" class="form-control">
                <option value="0">Seleccione un privilegio</option>
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
<?php } ?>
