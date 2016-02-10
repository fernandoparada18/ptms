<?php namespace controllers;

  use models\Herramienta as Herramienta;

  class herramientaController{

    private $herramienta;

    public function __construct(){
      $this->herramienta = new Herramienta();
    }

    public function index(){
      $datos = $this->herramienta->listar();
      return $datos;
    }
  }
?>
