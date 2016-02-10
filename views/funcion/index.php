<div class="box-principal">
  <h3 class="text-center">Listado de Funciones</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de funciones</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($datos)){ ?>
            <tr>
              <td><?php echo $row['idFuncion']; ?></td>
              <td><?php echo $row['funcion']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="<?php echo URL; ?>funcion/editar/<?php echo $row['idFuncion']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>funcion/eliminar/<?php echo $row['idFuncion']; ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
