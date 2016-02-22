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

    public function agregar(){
      if($_POST){
        $this->institucion->set("descripcion", $_POST['descripcion']);
        $this->institucion->add();
        header('Location: ' . URL . 'institucion');
      }
    }

    public function editar($id){
      if($_POST){
        $this->institucion->set("idInstitucion", $_POST['id']);
        $this->institucion->set("descripcion", $_POST['descripcion']);
        $this->institucion->edit();
        header('Location: '. URL . "institucion");
      }else{
        $this->institucion->set("idInstitucion", $id);
        $datos = $this->institucion->view();
        return $datos;
      }
    }

    public function eliminar($id){
      $this->institucion->set("idInstitucion", $id);
      $this->institucion->delete();
      header ('Location: '.URL.'institucion');
    }
  }
?>
