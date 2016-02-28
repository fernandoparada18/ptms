<?php namespace views;
	use models\Usuario as Usuario;
	$nick = new Usuario();
	$sesion = new Sesion();

	if( isset($_POST["iniciar"]) ){

		$usuario = $_POST["user"];
		$password = $_POST["password"];

		if($nick->validarUsuario($usuario,$password) == true){
			$sesion->set("usuario",$usuario);
			header("location: ".URL);
		} else {
			echo '<div class="alert alert-dismissible alert-danger">
			  			<button type="button" class="close" data-dismiss="alert">&times;</button>
			  			<strong>Lo Siento!!  Verifica tu nombre de usuario y contraseña</strong>
						</div>';
		}
	}
?>
<div class="row" id="login">
	<div class="col-md-4"></div>
  <div class="col-md-4">
  	<div class="well">
    	<h2 class="text-center">Por favor ingresa!</h2>
      <hr>
      <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
      	<div class="input-group">
        	<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" name="user" class="form-control" placeholder="Usuario" required>
        </div>
        <br>
        <div class="input-group">
        	<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
          <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <br>
        <div class="row text-center">
        	<div class="form-group">
          	<div class="col-md-6 centrar">
            	<div class="checkbox">
              	<label>
                	<input type="checkbox"> Recordarme
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
          	<div class="col-md-6">
            	<button type="submit" name="iniciar" class="btn btn-primary">Iniciar Sesión <i class="fa fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
	      <hr>
	      <h4>¿Olvidaste tu contraseña?</h4>
	      <p><a href="<?php echo URL; ?>usuario/recuperar" class="btn btn-link">Click aquí</a> para restablecer tu contraseña.</p>
			</form>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
