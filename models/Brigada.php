<?php namespace models;

  class Brigada{

    private $id;
    private $idPtms;
    private $nombreBrigadista;
    private $apellidosBrigadista;
    private $telefono;
    private $idFuncion;
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
      $sql = "SELECT t1.*, t2.funcion as funcion FROM brigadas t1 INNER JOIN funciones t2 ON t1.idFuncion = t2.idFuncion";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO brigadas(id, idPtms, nombreBrigadista, apellidosBrigadista, telefono, idFuncion)
              VALUES (null,'{$this->idPtms}','{$this->nombreBrigadista}','{$this->apellidosBrigadista}',
              '{$this->telefono}','{$this->idFuncion}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE brigadas WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE brigadas SET nombreBrigadista = '{$this->nombreBrigadista}', apellidosBrigadista = '{$this->apellidosBrigadista}',
              telefono = '{$this->telefono}', idFuncion = '{$this->idFuncion}' WHERE id = '{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT t1.*, t2.funcion as funcion FROM brigadas t1 INNER JOIN funciones t2
              ON t1.idFuncion = t2.idFuncion WHERE t1.id = '{$this->id}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }

  }
?>
