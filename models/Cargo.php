<?php namespace models;

  class Cargo{

    private $id;
    private $nombre;
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
      $sql = "SELECT * FROM cargos";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO cargos(id, nombre) VALUES (null,'{$this->nombre}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE cargos WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE cargos SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM cargos WHERE id = '{$this->id}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
