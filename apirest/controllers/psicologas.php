<?php 



header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/psicologas.php");


$psycologas=new  Clientes();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$psycologas->get_cliente();
       echo json_encode($datos);
    break;

   

    case "insert":
        
        $datos=$psycologas->insert_cliente($body["id_psicologa"], $body["nombre"],$body["corte"],$body["plataforma"],$body["celular"],$body["valor_servicio"],$body["correo"],$body["contraseña"],$body["pin"],$body["observacion"],);
        echo json_encode("insertado correctamente");
  
      break;

 

}

    

?>