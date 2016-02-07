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
<?php
    }

    public function __destruct(){
?>
      </div>
    </body>
  </html>
<?php
    }
  }
?>
