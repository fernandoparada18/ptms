<?php namespace models;

  class Funcion{

    private $idFuncion;
    private $funcion;
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
      $sql = "SELECT * FROM funciones";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO funciones(idFuncion, funcion) VALUES (null,'{$this->funcion}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE funciones WHERE idFuncion = '{$this->idFuncion}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE funciones SET funcion = '{$this->funcion}' WHERE idFuncion = '{$this->idFuncion}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM funciones WHERE idFuncion = '{$this->idFuncion}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
