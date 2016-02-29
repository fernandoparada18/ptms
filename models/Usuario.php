<?php namespace models;

  class Usuario{

    private $idUsuario;
    private $user;
    private $password;
    private $email;
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
      $sql = "SELECT t1.idUsuario, t1.user, t2.tipo as tipo_usuario FROM usuarios t1 INNER JOIN privilegios t2 ON t1.idPrivilegio = t2.idPrivilegio";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function listarPrivilegios(){
      $sql = "SELECT idPrivilegio, tipo FROM privilegios";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function noAsignado(){
      $sql = "SELECT t1.idUsuario, t1.user FROM usuarios t1 WHERE NOT EXISTS (SELECT t2.idUsuario FROM docentes t2 WHERE t1.idUsuario = t2.idUsuario) and t1.idUsuario != 1";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "INSERT INTO usuarios(idUsuario, user, password, idPrivilegio)
              VALUES (null, '{$this->user}',MD5('{$this->password}'),'{$this->idPrivilegio}')";
      $this->con->consultaSimple($sql);
    }

    public function delete(){
      $sql = "DELETE FROM usuarios WHERE idUsuario = '{$this->idUsuario}'";
      $this->con->consultaSimple($sql);
    }

    public function edit(){
      $sql = "UPDATE usuarios SET password = MD5('{$this->password}') WHERE idUsuario = '{$this->idUsuario}'";
      $this->con->consultaSimple($sql);
    }

    public function view(){
      $sql = "SELECT * FROM usuarios WHERE idUsuario = '$this->idUsuario'";
      $datos = $this->con->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($datos);
      return $row;
    }

    public function validarUsuario($user, $password){
  		$sql = "SELECT password FROM usuarios WHERE user = '$user';";
      $datos = $this->con->consultaRetorno($sql);
  		if($datos->num_rows > 0){
  			$fila = $datos->fetch_assoc();
  			if( strcmp(md5($password),$fila["password"]) == 0 )
  				return true;
  			else
  				return false;
  		}
  		else
  				return false;
  	}

    public function validarEmail(){
      $sql = "SELECT t1.idUsuario, CONCAT(t2.nombres, ' ', t2.apellidos) as nombre FROM usuarios t1 INNER JOIN docentes t2 WHERE t1.user = '$this->user' and t2.correo = '$this->email'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

  }
?>
