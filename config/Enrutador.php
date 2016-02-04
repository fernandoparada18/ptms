<?php namespace config;

  class Enrutador{

    public static function run(Request $recuest){
      $controlador = $recuest->getControlador() . "Controller";
    }
  }
?>
