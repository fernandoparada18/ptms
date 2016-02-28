<?php namespace controllers;

  use models\Municipio as Municipio;
  use models\Parroquia as Parroquia;
  use models\MunicipioEscolar as MunicipioEscolar;

  class municipioescolarController{

    private $municipio;
    private $parroquia;
    private $municipioEscolar;

    public function __construct(){
      $this->municipio = new Municipio();
      $this->parroquia = new Parroquia();
      $this->municipioEscolar = new MunicipioEscolar();
    }

    public function index(){
      $datos = $this->municipioEscolar->listar();
      return $datos;
    }

    public function agregar(){
      if(!$_POST){
        $datos = $this->municipio->listar();
        return $datos;
      }else{
        $this->municipioEscolar->set("idMunicipio", $_POST['cboMunicipio']);
        $this->municipioEscolar->set("idParroquia", $_POST['cboParroquia']);
        $this->municipioEscolar->set("nombre", $_POST['nombre']);
        $this->municipioEscolar->add();
        header('Location: ' . URL . 'municipioescolar');
      }
    }

    public function cargarParroquia(){
      if($_POST) {
    		$parroquias = array();
        $this->parroquia->set("idMunicipio", $_POST['idMunicipio']);
        $datos = $this->parroquia->listarXmunicipio();

    		while($row = mysqli_fetch_array($datos)){
    			$parroquia = array($row['id'], $row['nombre']);
    		  array_push($parroquias, $parroquia);
    		}

    		echo json_encode($parroquias);
    	}
    }
  }
?>
