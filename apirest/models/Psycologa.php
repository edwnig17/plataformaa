<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once ("../config/Conectar.php");
class Clientes extends Conectar{

    public function get_cliente(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM psicologas");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
    

    public function insert_cliente($id_psicologa,$nombre,$inicio,$corte,$plataforma,$celular,$valor_servicio,$correo,$contraseña,$pin,$observacion){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO psicologas(nombre,inicio,corte) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
 
        $stm->bindValue(1,$nombre);
        $stm->bindValue(2,$inicio);
        $stm->bindValue(3,$corte);
        $stm->bindValue(4,$plataforma);
        $stm->bindValue(5,$celular);
        $stm->bindValue(6,$valor_servicio);
        $stm->bindValue(7,$correo);
        $stm->bindValue(8,$contraseña);
        $stm->bindValue(9,$pin);
        $stm->bindValue(10,$observacion );
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    


}

?>