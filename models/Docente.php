<?php namespace models;

  class Docente{

    private $cedula;
    private $nombres;
    private $apellidos;
    private $telefono;
    private $correo;
    private $idUsuario;
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
      $sql = "SELECT t1.*, t2.user as nombre_usuario FROM docentes t1 INNER JOIN usuarios t2 ON t1.idUsuario = t2.idUsuario";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO docentes(cedula, nombres, apellidos, telefono, correo, idUsuario)
              VALUES ('{$this->cedula}','{$this->nombres}','{$this->apellidos}','{$this->telefono}',
              '{$this->correo}','{$this->idUsuario}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE docentes WHERE cedula = '{$this->cedula}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE docentes SET nombres = '{$this->nombres}', apellidos = '{$this->apellidos}',
              telefono = '{$this->telefono}', idUsuario = '{$this->idUsuario}' WHERE cedula = '{$this->cedula}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT t1.*, t2.user as nombre_usuario FROM docentes t1 INNER JOIN usuarios t2
              ON t1.idUsuario = t2.idUsuario WHERE t1.cedula = '{$this->cedula}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
