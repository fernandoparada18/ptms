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
<script>
  $(document).ready(function(){
    $("#cboMunicipio").change(function() {
      var municipio = $(this).val();
      if(municipio > 0){
        var datos = { idMunicipio : $(this).val() };
        $.post("cargarParroquia", datos, function(parroquias) {
          var $comboParroquias = $("#cboParroquia");
          $comboParroquias.empty();
          $.each(parroquias, function(index, parroquia) {
              //
              $comboParroquias.append("<option>" + parroquia.nombre + "</option>");
          });
        }, 'json');
      }else{
        var $comboParroquias = $("#cboParroquia");
        $comboParroquias.empty();
        $comboParroquias.append("<option>Seleccione un municipio</option>");
      }
    });
  });
</script>
<div class="box-segundario">
	<h3 class="text-center">Agregar Municipio Escolar<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<he class="panel-title">Agregar nuevo municipio escolar</he>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="" class="form-horizontal" method="POST" enctype="multipart/from-data">
						<div class="form-group">
							<label for="inputcboMunicipio" class="control-label">Municipio</label>
							<select id="cboMunicipio" name="cboMunicipio" class="form-control">
                <option value="0">Seleccione un municipio</option>
								<?php while($row = mysqli_fetch_array($datos)){ ?>
										<option value="<?php echo $row['idMunicipio']; ?>"><?php echo $row['municipio']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="inputcboParroquia" class="control-label">Parroquia</label>
							<select id="cboParroquia" name="cboParroquia" class="form-control">
                <option value="0">Seleccione un municipio</option>
							</select>
						</div>
						<div class="form-group">
							<label for="inputDescripcion" class="control-label">Nombre</label>
							<input type="text" class="form-control" name="nombre" required>
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
