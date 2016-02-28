<?php namespace views;
  $sesion = new Sesion();
  $usuario = $sesion->get("usuario");
  if( $usuario == false ) {
    // si no se ha iniciado sesión redirecciona a la pagina login.php
    require_once(ROOT . "views" . DS . "login.php");
  }elseif($usuario != "admin"){
    require_once(ROOT . "views" . DS . "menu.php");
    echo "<h2 class='text-center'>Acceso denegado</h2>";
  }else{
    // Aquí va el contenido de la pagina qu se mostrara en caso de que se haya iniciado sesion
    require_once(ROOT . "views" . DS . "menu.php");
?>
<div class="box-principal">
  <h3 class="text-center">Listado de Rubros</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de rubros</h3>
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
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['nombre']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="<?php echo URL; ?>rubro/editar/<?php echo $row['id']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="<?php echo URL; ?>rubro/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php } ?>
