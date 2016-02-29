<?php namespace models;

  class Institucion{

    private $idInstitucion;
    private $descripcion;
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
      $sql = "SELECT * FROM instituciones";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO instituciones(idInstitucion, descripcion) VALUES (null,'{$this->descripcion}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE FROM instituciones WHERE idInstitucion = '{$this->idInstitucion}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE instituciones SET descripcion = '{$this->descripcion}' WHERE idInstitucion = '{$this->idInstitucion}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM instituciones WHERE idInstitucion = '{$this->idInstitucion}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
