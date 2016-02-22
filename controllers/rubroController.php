<?php namespace controllers;

  use models\Rubro as Rubro;

  class rubroController{

    private $rubro;

    public function __construct(){
      $this->rubro = new Rubro();
    }

    public function index(){
      $datos = $this->rubro->listar();
      return $datos;
    }

    public function agregar(){
      if($_POST){
        $this->rubro->set("nombre", $_POST['descripcion']);
        $this->rubro->add();
        header('Location: ' . URL . 'rubro');
      }
    }
  }
?>
