<div class="box-principal">
  <h3 class="text-center">Listado de Docentes</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de docentes</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($datos)){ ?>
            <tr>
              <td><?php echo $row['cedula']; ?></td>
              <td><?php echo $row['nombres']; ?></td>
              <td><?php echo $row['apellidos']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td><?php echo $row['correo']; ?></td>
              <td><?php echo $row['nombre_usuario']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="<?php echo URL; ?>docente/editar/<?php echo $row['cedula']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>docente/eliminar/<?php echo $row['cedula']; ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
