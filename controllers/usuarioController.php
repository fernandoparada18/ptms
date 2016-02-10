<?php namespace controllers;

  use models\Usuario as Usuario;

  class usuarioController{

    private $usuario;

    public function __construct(){
      $this->usuario = new Usuario();
    }

    public function index(){
      $datos = $this->usuario->listar();
      return $datos;
    }
  }
?>
