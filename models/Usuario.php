<?php namespace models;

  class Usuario{

    private $idUsuario;
    private $user;
    private $password;
    private $idPrivilegio;
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
      $sql = "SELECT * FROM usuarios";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO usuarios(idUsuario, user, password, idPrivilegio)
              VALUES (null, '{$this->user}','MD5({$this->nombres})','{$this->idPrivilegio}'";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE usuarios WHERE idUsuario = '{$this->idUsuario}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE usuarios SET password = 'MD5({$this->password})' WHERE idUsuario = '{$this->idUsuario}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM usuarios WHERE idUsuario = '$this->idUsuario'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }
  }
?>
