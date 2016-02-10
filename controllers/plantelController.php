<?php namespace controllers;

  use models\Plantel as Plantel;

  class plantelController{

    private $plantel;

    public function __construct(){
      $this->plantel = new Plantel();
    }

    public function index(){
      $datos = $this->plantel->listar();
      return $datos;
    }
  }
?>
