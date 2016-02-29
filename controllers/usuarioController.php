<?php namespace controllers;

  use models\Usuario as Usuario;

  class usuarioController{

    private $usuario;

    public function __construct(){
      $this->usuario = new Usuario();
    }

    public function index(){
      $datos = $this->usuario->listar();
      return $datos;
    }

    public function agregar(){
      if(!$_POST){
        $datos = $this->usuario->listarPrivilegios();
        return $datos;
      }else{
        $this->usuario->set("user", $_POST['user']);
        $this->usuario->set("password", $_POST['password']);
        $this->usuario->set("idPrivilegio", $_POST['idPrivilegio']);
        $this->usuario->add();
        header('Location: ' . URL . 'usuario');
      }
    }

    public function eliminar($id){
      $this->usuario->set("idUsuario", $id);
      $this->usuario->delete();
      header ('Location: '.URL.'usuario');
    }

    public function recuperar(){
      if($_POST){
        $this->usuario->set("user", $_POST['user']);
        $this->usuario->set("email", $_POST['email']);
        $datos = $this->usuario->validarEmail();
        if($datos->num_rows > 0){
          $password = $this->cadenaAleatorea();
    			$fila = $datos->fetch_assoc();
          $this->usuario->set("idUsuario", $fila["idUsuario"]);
          $this->usuario->set("password", $password);
          $this->usuario->edit();
          //Destinatario
        	$email_to = $_POST['email'];
        	//Titulo
        	$email_subject = "Recuperción de Acceso";
        	//Mensaje
        	$email__message = "Estimado " . strtoupper($fila["nombre"]) . ". "
                            ."<br />Le informamos su nueva contraseña para ingresar al sistema P.T.M.S. es:  <b>" . $password . "</b> "
                            ."<p>Comunicamos que la dirección a través de la cual usted está recibiendo el presente e-mail será utilizada"
                            ." únicamente para el servicio de notificaciones, le agradecemos no responder este correo ni utilizarlo"
                            ." como vía de comunicación para realizar consultas personales ni referentes a problemas tecnicos.</p>";
        	//cabecera
        	$headers = "MIME-Version: 1.0\r\n";
        	$headers .= "Content-type: text/html; charset=utf-8\r\n";
        	//dirección del remitente
        	$headers .= "From: P.T.M.S. Carabobo < ".FROM." >\r\n";
        	//Enviamos el mensaje a tu_dirección_email
        	$bool = mail($email_to,$email_subject,$email__message,$headers);
        	if($bool){
            echo "<script>alert('En los proximos minutos recibitara un correo con su nueva contraseña!!');</script>
                  <meta http-equiv='REFRESH' content='0; URL=" . URL . "'>";
        	}else{
            echo "<script>alert('No se pudo enviar su nueva contraseña!!');</script>";
        	}
    		}else{
          echo "<script>alert('Su usuario o email no son correctos!!');</script>";
        }
      }
    }

    private function cadenaAleatorea($length=10,$uc=TRUE,$n=TRUE,$sc=FALSE){
      $source = 'abcdefghijklmnopqrstuvwxyz';
      if($uc==1) $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      if($n==1) $source .= '1234567890';
      if($sc==1) $source .= '|@#~$%()=^*+[]{}-_';
      if($length>0){
          $rstr = "";
          $source = str_split($source,1);
          for($i=1; $i<=$length; $i++){
              mt_srand((double)microtime() * 1000000);
              $num = mt_rand(1,count($source));
              $rstr .= $source[$num-1];
          }
      }
      return $rstr;
    }

  }
?>
