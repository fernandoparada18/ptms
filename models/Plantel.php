<?php namespace models;

  class Plantel{

    private $idPlantel;
    private $nombrePlantel;
    private $direccion;
    private $idMunicipio;
    private $telefono;
    private $correo;
    private $cedulaDirector;
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
      $sql = "SELECT t2.*, t1.nombres as nombre_director, t2.municipio as municipio
              FROM docentes t1 INNER JOIN plantel t2 ON t1.cedulaDirector = t2.cedula
              INNER JOIN municipios t3 ON t2.idMunicipio = t3.idMunicipio";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO plantel(idPlantel, nombrePlantel, direccion, idMunicipio, telefono, correo, cedulaDirector)
              VALUES (null, '{$this->nombrePlantel}','{$this->direccion}','{$this->idMunicipio}','{$this->telefono}',
              '{$this->correo}','{$this->cedulaDirector}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE FROM plantel WHERE idPlantel = '{$this->idPlantel}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE plantel SET nombrePlantel = '{$this->nombrePlantel}', direccion = '{$this->direccion}',
              telefono = '{$this->telefono}', correo = '{$this->correo}', '{$this->cedulaDirector}' WHERE idPlantel = '{$this->idPlantel}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT t2.*, t1.nombres as nombre_director, t2.municipio as municipio
              FROM docentes t1 INNER JOIN plantel t2 ON t1.cedulaDirector = t2.cedula
              INNER JOIN municipios t3 ON t2.idMunicipio = t3.idMunicipio WHERE t2.idPlantel = '{$this->idPlantel}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
