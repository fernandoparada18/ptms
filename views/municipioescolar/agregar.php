<div class="box-segundario">
	<h3 class="text-center">Agregar Parroquia<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<he class="panel-title">Agregar una nueva parroquia</he>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="" class="form-horizontal" method="POST" enctype="multipart/from-data">
						<div class="form-group">
							<label for="inputidMunicipio" class="control-label">Municipio</label>
							<select name="idMunicipio" class="form-control">
								<?php while($row = mysqli_fetch_array($datos)){ ?>
										<option value="<?php echo $row['idMunicipio']; ?>"><?php echo $row['municipio']; ?></option>
								<?php } ?>
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
