<div class="box-principal">
  <h3 class="text-center">Listado de Planteles</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de planteles</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Plantel</th>
            <th>Dirección</th>
            <th>Municipio</th>
            <th>Director</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($datos)){ ?>
            <tr>
              <td><?php echo $row['nombrePlantel']; ?></td>
              <td><?php echo $row['direccion']; ?></td>
              <td><?php echo $row['municipio']; ?></td>
              <td><?php echo $row['nombre_director']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td><?php echo $row['correo']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="<?php echo URL; ?>plantel/editar/<?php echo $row['idPlantel']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>plantel/eliminar/<?php echo $row['idPlantel']; ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
