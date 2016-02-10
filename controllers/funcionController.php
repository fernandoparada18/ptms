<?php namespace controllers;

  use models\Funcion as Funcion;

  class funcionController{

  private $funcion;

  public function __construct(){
    $this->funcion = new Funcion();
  }

    public function index(){
      $datos = $this->funcion->listar();
      return $datos;
    }
  }
?>
