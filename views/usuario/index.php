<div class="box-principal">
  <h3 class="text-center">Listado de Usuarios</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de usuarios</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Tipo de Usuario</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($datos)){ ?>
            <tr>
              <td><?php echo $row['idUsuario']; ?></td>
              <td><?php echo $row['user']; ?></td>
              <td><?php echo $row['tipo_usuario']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="<?php echo URL; ?>usuario/editar/<?php echo $row['idUsuario']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>usuario/eliminar/<?php echo $row['idUsuario']; ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
