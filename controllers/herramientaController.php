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

    public function agregar(){
      if($_POST){
        $this->herramienta->set("descripcion", $_POST['descripcion']);
        $this->herramienta->add();
        header('Location: ' . URL . 'herramienta');
      }
    }

    public function editar($id){
      if($_POST){
        $this->herramienta->set("idHerramienta", $_POST['id']);
        $this->herramienta->set("descripcion", $_POST['descripcion']);
        $this->herramienta->edit();
        header('Location: '. URL . "herramienta");
      }else{
        $this->herramienta->set("idHerramienta", $id);
        $datos = $this->herramienta->view();
        return $datos;
      }
    }

    public function eliminar($id){
      $this->herramienta->set("idHerramienta", $id);
      $this->herramienta->delete();
      header ('Location: '.URL.'herramienta');
    }
  }
?>
