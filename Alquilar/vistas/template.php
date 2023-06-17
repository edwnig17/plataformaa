<?php 
/* Capturando Rutas de la URL */
$routerArray = explode("/", $_SERVER['REQUEST_URI']);
$routerArray = array_filter($routerArray);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/plugins/adminlte/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- jQuery -->
  <script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="vistas/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/assets/plugins/adminlte/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vistas/assets/plugins/adminlte/js/demo.js"></script>
  
  <!-- DataTables  & Plugins -->
  <script src="vistas/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="vistas/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vistas/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vistas/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="vistas/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="vistas/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="vistas/assets/plugins/jszip/jszip.min.js"></script>
  <script src="vistas/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="vistas/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="vistas/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="vistas/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="vistas/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include"vistas/modules/navbar.php"; ?>

  <!-- Main Sidebar Container -->
  <?php include"vistas/modules/sidebar.php"; ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
    if(!empty($routerArray[4])){
      if($routerArray[4] == "users" ||
      $routerArray[4] == "clinicHistori" ||
      $routerArray[4] == "interviews" ||
      $routerArray[4] == "psychologits" ||
      $routerArray[4] == "treatment"){
        include "vistas/pages/".$routerArray[4]."/".$routerArray[4].".php";
      }
    }else {
      include "vistas/pages/home/clientes.php";
    }
    ?>
    
  </div>
  <!-- /.content-wrapper -->
  <?php require"modules/footer.php" ?>

</div>
<!-- ./wrapper -->


</body>
</html>
