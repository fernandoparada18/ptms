<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="well">
		<h3 class="text-center">¿Olvidaste tu contraseña?</h3>
		<p>Ingresa tu usuario y dirección de Email</p>
		<form action="" method="POST" enctype="multipart/from-data">
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" name="user" class="form-control" placeholder="Usuario" required>
      </div>
      <br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
				<input type="email" name="email" class="form-control" placeholder="Email" required>
			</div>
			<br>
			<div class="row text-center">
					<div class="col-md-6">
            <a href="<?php echo URL; ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Iniciar Sesión</a>
					</div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary">Enviar <i class="fa fa-arrow-right"></i></button>
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
