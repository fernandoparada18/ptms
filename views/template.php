<?php namespace views;

  $template = new Template();

  class Template{

    public function __construct(){
?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>..::PROGRAMA TODAS LAS MANOS A LA SIEMBRA::..</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>views/template/css/main.css">
      <link rel="stylesheet" type="text/css" media="all" href="<?php echo URL; ?>views/template/css/media.css">
      <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>views/template/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo URL; ?>views/template/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
      <div class="container">
       <div class="row">
         <div class="col-md-4">
           <img src="<?php echo URL; ?>views/template/img/logozec.png" width="100%"></img>
         </div>
         <div class="col-md-4"></div>
         <div class="col-md-4">
           <img class="logoptms img-rounded" src="<?php echo URL; ?>views/template/img/logoptms.jpg" width="98%"></img>
         </div>
       </div>
       <hr class="linea-horizontal"></hr>
       <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">P.T.M.S.</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agregar <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo URL; ?>docente">Docentes</a></li>
                    <li><a href="<?php echo URL; ?>plantel">Planteles</a></li>
                    <li><a href="<?php echo URL; ?>usuario">Usuarios</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL; ?>funcion">Funciones</a></li>
                    <li><a href="<?php echo URL; ?>herramienta">Herramientas</a></li>
                    <li><a href="<?php echo URL; ?>institucion">Instituciones</a></li>
                    <li><a href="<?php echo URL; ?>municipio">Municipios</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo URL; ?>docente">Docentes</a></li>
                    <li><a href="<?php echo URL; ?>plantel">Planteles</a></li>
                    <li><a href="<?php echo URL; ?>usuario">Usuarios</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL; ?>funcion">Funciones</a></li>
                    <li><a href="<?php echo URL; ?>herramienta">Herramientas</a></li>
                    <li><a href="<?php echo URL; ?>institucion">Instituciones</a></li>
                    <li><a href="<?php echo URL; ?>municipio">Municipios</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Archivos <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo URL; ?>ptms">Ptms</a></li>
                    <li><a href="<?php echo URL; ?>brigada">Brigada</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL; ?>mantenimiento">Mantenimiento</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ptms</a></li>
                    <li><a href="#">Brigada</a></li>
                    <li><a href="#">Mantenimiento</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><img src="<?php echo URL; ?>views/template/img/user.png" width="24px" height="24px" alt="user" class="img-circle"></img> Cerrar Sesión</a></li>
              </ul>
            </div>
          </div>
        </nav>
<?php
    }

    public function __destruct(){
?>
        <footer class="navbar-fixed-bottom">
          Todos los derechos reservados &copy 2016
        </footer>
      </div>
      <script src="<?php echo URL; ?>views/template/js/jquery-1.11.2.min.js"></script>
      <script src="<?php echo URL; ?>views/template/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
    }
  }
?>
