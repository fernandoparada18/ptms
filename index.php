<?php
  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(__FILE__)) . DS);
  define('URL', "http://localhost/web/ptms/");

  require_once "config/Autoload.php";
  config\Autoload::run();
  config\Enrutador::run(new config\Request());
?>
