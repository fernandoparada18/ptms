<?php namespace models;

  class Herramienta{

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
      $sql = "";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
