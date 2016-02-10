<?php namespace controllers;

  use models\Institucion as Institucion;

  class institucionController{

    private $institucion;

    public function __construct(){
      $this->institucion = new Institucion();
    }

    public function index(){
      $datos = $this->institucion->listar();
      return $datos;
    }
  }
?>
