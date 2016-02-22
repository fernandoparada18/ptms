<?php namespace views;

  $template = new Template();

  class Template{

    public function __construct(){
      include("header.php");
      include("menu.php");
    }

    public function __destruct(){
      include("footer.php");
    }
  }
?>
