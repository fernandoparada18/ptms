<?php namespace views;
  $sesion = new Sesion();
  $usuario = $sesion->get("usuario");
  if( $usuario == false ) {
    // si no se ha iniciado sesión redirecciona a la pagina login.php
    header("location: ".URL);
  }else{
    $sesion->termina_sesion();
    header("location: ".URL);
  }
?>
