<?php namespace controllers;

  use models\Municipio as Municipio;
  use models\Parroquia as Parroquia;

  class parroquiaController{

    private $municipio;
    private $parroquia;

    public function __construct(){
      $this->municipio = new Municipio();
      $this->parroquia = new Parroquia();
    }

    public function index(){
      $datos = $this->parroquia->listar();
      return $datos;
    }

    public function agregar(){
      if(!$_POST){
        $datos = $this->municipio->listar();
        return $datos;
      }else{
        $this->parroquia->set("idMunicipio", $_POST['idMunicipio']);
        $this->parroquia->set("nombre", $_POST['nombre']);
        $this->parroquia->add();
        header('Location: ' . URL . 'parroquia');
      }
    }
  }
?>
