<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
?>

<div class="">
    <div class="card-header">
      <h3 class="card-title">Añadir Cliente</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputNombre">Nombre</label>
            <input type="text" class="form-control" id="exampleInputNombre" placeholder="Enter Nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputInicio">Inicio</label>
            <input type="text" class="form-control" id="exampleInputInicio" placeholder="Enter Inicio" name="Inicio">
          </div>
          <div class="form-group">
            <label for="exampleInputContacto">Contacto</label>
            <input type="number" class="form-control" id="exampleInputContacto" placeholder="Enter Contacto" name="contacto">
          </div>
          <div class="form-check">
            <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
          </div>
          <div class="form-group">
            <label for="exampleInputDireccion">Direccion</label>
            <input type="text" class="form-control" id="exampleInputDireccion" placeholder="Enter Direccion" name="direccion">
          </div>
          <div class="form-group">
            <label for="exampleInputDireccion">Direccion</label>
            <input type="text" class="form-control" id="exampleInputDireccion" placeholder="Enter Direccion" name="direccion">
          </div>
          <div class="form-group">
            <label for="exampleInputDireccion">Direccion</label>
            <input type="text" class="form-control" id="exampleInputDireccion" placeholder="Enter Direccion" name="direccion">
          </div>
          <div class="form-group">
            <label for="exampleInputDireccion">Direccion</label>
            <input type="text" class="form-control" id="exampleInputDireccion" placeholder="Enter Direccion" name="direccion">
          </div>
        </div>
    </form>
</div>

<?php 
$url = "http://localhost/ArTeM02-053/psy/apirest/controllers/clientes.php?op=insert"; 
if(isset($_POST['guardar'])){

$datos = [
  'id_psicologa' => 'id_psicologa',
  'nombre' => $_POST['nombre'],
  'inicio' => $_POST['inicio'],
  'corte' => $_POST['corte'],
  'plataforma' => $_POST['plataforma'],
  'celular' => $_POST['celular'],
  'valor_servicio' => $_POST['valor_servicio'],
  'correo' => $_POST['correo'],
  'contraseña' => $_POST['contraseña'],
  'pin' => $_POST['pin'],
  'observacion' => $_POST['observacion']
];

$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($datos));
    $response = curl_exec($curl);
    curl_close($curl);
    var_dump($response);


}
?>

