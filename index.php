<?php
  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(__FILE__)) . DS);

  require_once "config/Autoload.php";
  config\Autoload::run();
?>
