<?php namespace models;

  class Municipio{

    private $idMunicipio;
    private $municipio;
    private $con;

    public function __construct(){
      $this->con = new Conexion();
    }

    public function set($atributo, $contenido){
      $this->$atributo = $contenido;
    }

    public function get($atributo){
      return $this->$atributo;
    }

    public function listar(){
      $sql = "SELECT * FROM municipios";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO municipios(idMunicipio, municipio) VALUES (null,'{$this->municipio}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE municipios WHERE idMunicipio = '{$this->idMunicipio}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE FROM municipios SET municipio = '{$this->municipio}' WHERE idMunicipio = '{$this->idMunicipio}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM municipios WHERE idMunicipio = '{$this->idMunicipio}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
