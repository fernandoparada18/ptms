<div class="box-segundario">
	<h3 class="text-center">Editar Rubro<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<he class="panel-title">Editar rubro <?php echo $datos['descripcion']; ?></he>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="" class="form-horizontal" method="POST">
						<input value="<?php echo $datos['id']; ?>" name="id" type="hidden">
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
