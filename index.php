<?php
  require_once "config/Autoload.php";
  config\Autoload::run();
  $doc = new models\Docente();
  $doc->set("cedula",20081060);
  $datos = $doc->view();
  print $datos['nombres'];
?>
