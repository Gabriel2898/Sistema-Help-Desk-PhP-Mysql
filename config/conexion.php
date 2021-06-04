<?php

  session_start();
  class Conectar{
    protected $dbh;
    protected function Conexion(){
      try{
        $conectar=$this->dbh=new PDO("mysql:host=localhost:3307;dbname=sistema_de_tickets","root","");
        return $conectar;
      }catch(Exception $e){
        print "!Error al Conectar a la BD! : " . $e->getMessage() . "</br>";
        die();
      }
    }
    public function set_names(){
      return $this->dbh->query("SET NAMES 'utf8'");
    }
    public function ruta(){
      return "http://localhost:8080/sistema_de_tickets/";
    }
  }

?>