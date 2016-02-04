<?php namespace models;

  class Mantenimiento{

    private $id;
    private $idPtms;
    private $fecha;
    private $detalle;
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
      $sql = "SELECT * FROM mantenimiento";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO mantenimiento(id, idPtms, fecha, detalle) VALUES (null,'{$this->idPtms}','{$this->fecha}','{$this->detalle}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE mantenimiento WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE mantenimiento SET fecha = '{$this->fecha}', detalle = '{$this->detalle}' WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM mantenimiento WHERE id = '{$this->id}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
