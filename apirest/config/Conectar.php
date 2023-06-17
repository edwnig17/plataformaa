<?php

class Conectar{
    protected $db;
    protected function Conexion(){
        try {
            $conectar = $this->db = new PDO("mysql:local=localhost;dbname=psy", "root","");
            return $conectar;

        } catch (Exception $e) {
            return $e->getMessage();
            die();
        }
    }

   

}

?>