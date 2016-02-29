<?php namespace models;

  class Herramienta{

    private $idHerramienta;
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
      $sql = "SELECT * FROM herramientas";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO herramientas(idHerramienta, descripcion) VALUES (null,'{$this->descripcion}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE FROM herramientas WHERE idHerramienta = '{$this->idHerramienta}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE herramientas SET descripcion = '{$this->descripcion}' WHERE idHerramienta = '{$this->idHerramienta}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM herramientas WHERE idHerramienta = '{$this->idHerramienta}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
