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

    public function agregar(){
      if($_POST){
        $this->municipio->set("municipio", $_POST['nombre']);
        $this->municipio->add();
        header('Location: ' . URL . 'municipio');
      }
    }

    public function editar($id){
      if($_POST){
        $this->municipio->set("idMunicipio", $_POST['id']);
        $this->municipio->set("municipio", $_POST['descripcion']);
        $this->municipio->edit();
        header('Location: '. URL . "municipio");
      }else{
        $this->municipio->set("idMunicipio", $id);
        $datos = $this->municipio->view();
        return $datos;
      }
    }

    public function eliminar($id){
      $this->municipio->set("idMunicipio", $id);
      $this->municipio->delete();
      header ('Location: '.URL.'municipio');
    }
  }
?>
