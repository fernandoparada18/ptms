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

    public function editar($id){
      if($_POST){
        $this->rubro->set("id", $_POST['id']);
        $this->rubro->set("descripcion", $_POST['descripcion']);
        $this->rubro->edit();
        header('Location: '. URL . "rubro");
      }else{
        $this->rubro->set("id", $id);
        $datos = $this->rubro->view();
        return $datos;
      }
    }

    public function eliminar($id){
      $this->rubro->set("id", $id);
      $this->rubro->delete();
      header ('Location: '.URL.'rubro');
    }
  }
?>
