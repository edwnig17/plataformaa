<?php $url = "http://localhost/ArTeM02-053/psy/apirest/controllers/productos.php?op=GetAll"; 
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    $ouput = json_decode(curl_exec($curl));
?>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de Productos </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio_dia</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($ouput as $out){ ?>
                  <tr>
                    <td><?= $out->nombre  ; ?></td>
                    <td><?= $out->descripcion; ?></td>
                    <td><?= $out->precio_dia; ?></td>
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