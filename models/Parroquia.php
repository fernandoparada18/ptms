<?php namespace models;

  class Parroquia{

    private $id;
    private $idMunicipio;
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
      $sql = "SELECT t1.*, t2.municipio as municipio FROM parroquias t1 INNER JOIN municipios t2 ON t1.idMunicipio = t2.idMunicipio";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function listarXmunicipio(){
      $sql = "SELECT id, nombre FROM parroquias WHERE idMunicipio = '{$this->idMunicipio}'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO parroquias(id, idMunicipio, nombre) VALUES (null,'{$this->idMunicipio}','{$this->nombre}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE FROM parroquias WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE parroquias SET idMunicipio = '{$this->idMunicipio}', nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM parroquias WHERE id = '{$this->id}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
