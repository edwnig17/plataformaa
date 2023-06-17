<?php $url = "http://localhost/ArTeM02-053/psy/apirest/controllers/clientes.php?op=GetAll"; 
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    $ouput = json_decode(curl_exec($curl));
?>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de Clientes  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Inicio</th>
                    <th>Corte</th>
                    <th>Plataforma</th>
                    <th>Celular</th>
                    <th>valor_servicio</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Contraseña</th>
                    <th>Pin</th>
                    <th>Observacion</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($ouput as $out){ ?>
                  <tr>
                    <td><?= $out->nombre  ; ?></td>
                    <td><?= $out->inicio; ?></td>
                    <td><?= $out->corte; ?></td>
                    <td><?= $out->plataforma; ?></td>
                    <td><?= $out->celular; ?></td>
                    <td><?= $out->valor_servicio; ?></td>
                    <td><?= $out->correo; ?></td>
                    <td><?= $out->contraseña; ?></td>
                    <td><?= $out->pin; ?></td>
                    <td><?= $out->observacion; ?></td>



                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>