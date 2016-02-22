<div class="box-principal">
  <h3 class="text-center">Listado de Parroquias</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de parroquias</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Municipio</th>
            <th>Parroquia</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($datos)){ ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['municipio']; ?></td>
              <td><?php echo $row['nombre']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="<?php echo URL; ?>parroquia/editar/<?php echo $row['id']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>parroquia/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
