<?php namespace controllers;

  use models\Docente as Docente;
  use models\Usuario as Usuario;

  class docenteController{

    private $docente;
    private $usuario;

    public function __construct(){
      $this->docente = new Docente();
      $this->usuario = new Usuario();
    }

    public function index(){
      $datos = $this->docente->listar();
      return $datos;
    }

    public function agregar(){
      if(!$_POST){
        $datos = $this->usuario->noAsignado();
        return $datos;
      }else{
        $this->docente->set("cedula", $_POST['cedula']);
        $this->docente->set("nombres", $_POST['nombres']);
        $this->docente->set("apellidos", $_POST['apellidos']);
        $this->docente->set("telefono", $_POST['telefono']);
        $this->docente->set("correo", $_POST['correo']);
        $this->docente->set("idUsuario", $_POST['idUsuario']);
        $this->docente->add();
        header("Location: " . URL . "docente");
      }
    }
  }
?>
