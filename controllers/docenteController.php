<?php namespace controllers;

  use models\Docente as Docente;

  class docenteController{

    private $docente;

    public function __construct(){
      $this->docente = new Docente();
    }

    public function index(){
      $datos = $this->docente->listar();
      return $datos;
    }
  }
?>
