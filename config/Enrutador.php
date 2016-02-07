<?php namespace config;

  class Enrutador{

    public static function run(Request $request){
      $controlador = $request->getControlador() . "Controller";
      $ruta = ROOT . "controllers" . DS . $controlador . ".php";
      $metodo = $request->getMetodo();
      if($metodo == "index.php"){
        $metodo = "index";
      }
      $argumento = $request->getArgumento();
      if(is_readable($ruta)){
        require_once $ruta;
        $mostrar = "controllers\\" . $controlador;
        $controlador = new $mostrar;
        if(!isset($argumento)){
          call_user_func(array($controlador, $metodo));
        }else{
          call_user_func_array(array($controlador, $metodo), $argumento);
        }
      }
    }
  }
?>
