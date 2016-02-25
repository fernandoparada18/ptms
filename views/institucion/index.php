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
<div class="box-principal">
  <h3 class="text-center">Listado de Instituciones</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de instituciones</h3>
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
              <td><?php echo $row['idInstitucion']; ?></td>
              <td><?php echo $row['descripcion']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="<?php echo URL; ?>institucion/editar/<?php echo $row['idInstitucion']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>institucion/eliminar/<?php echo $row['idInstitucion']; ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php } ?> 
