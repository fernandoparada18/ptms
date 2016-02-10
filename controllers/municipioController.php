<?php namespace controllers;

  use models\Municipio as Municipio;

  class municipioController{

    private $municipio;

    public function __construct(){
      $this->municipio = new Municipio();
    }

    public function index(){
      $datos = $this->municipio->listar();
      return $datos;
    }
  }
?>
