<?php namespace controllers;

  use models\Cargo as Cargo;

  class cargoController{

    private $cargo;

    public function __construct(){
      $this->cargo = new Cargo();
    }

    public function index(){
      $datos = $this->cargo->listar();
      return $datos;
    }

    public function agregar(){
      if($_POST){
        $this->cargo->set("nombre", $_POST['descripcion']);
        $this->cargo->add();
        header('Location: '. URL . "cargo");
      }
    }

    public function editar($id){
			if($_POST){
				$this->cargo->set("id", $_POST['id']);
				$this->cargo->set("nombre", $_POST['descripcion']);
				$this->cargo->edit();
        header('Location: '. URL . "cargo");
			}else{
				$this->cargo->set("id", $id);
				$datos = $this->cargo->view();
				return $datos;
			}
		}

		public function eliminar($id){
			$this->cargo->set("id", $id);
			$this->cargo->delete();
      header ('Location: '.URL.'cargo');
		}
  }
?>
