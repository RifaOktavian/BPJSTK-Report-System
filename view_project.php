<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tabel Project</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php 
        // //link atau file json diketik di sini
        $json                   =   'http://172.26.7.223:1303/api/project';

        //untuk mendapatkan file json
        $jsondata               =   file_get_contents($json);


        //convert json ke data array
        $data                   =   json_decode($jsondata, true);


        //hitung jumlah data di json
        $count                  =   count($data['DATA']);
        $JUMLAH_DATA            =   $count;
        ?>

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-green navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="view_project.php" class="nav-link active">List Project</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="view_workload.php" class="nav-link">List Workload</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="tabel_aktivitas.php" class="nav-link">List Aktivitas</a>
      </li> 
    </ul>

   

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/leaf.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BPJSTK</span>
    </a>

  

      <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-pdf-o"></i>
              <p>
                Reporting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./view_project.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Data Project</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./view_workload.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Data Workload</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./tabel_aktivitas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Data Aktivitas</p>
                </a>
              </li> 
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="view_project.php">Tampil Project</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php echo  "<h1>$JUMLAH_DATA  </h1>"; ?>
                <p>Total Project</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="" class="small-box-footer"><i class="fas fa-arrow-circle-bottom"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h1>Print</h1>
                <p>Print Dokumen Project</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a target="blank_" href="print_project.php" class="small-box-footer">Print Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        <!-- /.row -->
        <!-- Main row -->    
        
          </section>
          <div class="container" align="center">
          <h1 style="text-align: center;">Tabel Project </h1>
<hr>
<br>
<br>
<div class="container">
    <div class="content">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        NO
                    </th>
                    <th>
                        Nama Project
                    </th>
                    <th>
                        Progress
                    </th>
                    <th>
                        Divisi
                    </th>
                    <th>
                        Tanggal Selesai
                    </th>
                    <th>
                        PMO
                    </th>
                    <th>
                        Tim
                    </th>

                </tr>
              </thead>
              <tbody>
                <tr>
    <?php
        //mendapatkan data projek details
        for($i = 0 ; $i < $count ; $i++)
        {
            //menyimpan data di variabel
            $ID_PROJECT         =   $data['DATA'][$i]['ID_PROJECT'];
            $PROJECT_NAME       =   $data['DATA'][$i]['PROJECT_NAME'];
            $DIVISI             =   $data['DATA'][$i]['DIVISI'];
            $STATUSREVIEW       =   $data['DATA'][$i]['STATUSREVIEW'];
            $ENDDATE            =   $data['DATA'][$i]['ENDDATE'];
            $TANGGAL_SELESAI    =   substr($ENDDATE,0,10);
            $TANGGAL            =   strtotime($TANGGAL_SELESAI);
            $TANGGAL_BARU       =   date('d-m-Y',$TANGGAL);
            $PMO                =   $data['DATA'][$i]['PMO'];
            $TIM                =   $data['DATA'][$i]['TIM'];
            $PROGRESS           =   $data['DATA'][$i]['PROGRESS'];
            $TOTAL_DATA         =   $data['TOTAL'];

            //menampilkan no angka
            $nomor              =   $i +1;

            //data dimasukkan ke tabel
            echo    "<td>               $nomor                                                        </td>";
            echo    "<td> <a href='tabel_laporan_aktivitas.php?id_project=$ID_PROJECT'>$PROJECT_NAME  </td>";
            echo    "<td> <a href='tabel_laporan_aktivitas.php?id_project=$ID_PROJECT'>$PROGRESS      </td>";
            echo    "<td>               $DIVISI                                                       </td>";
            echo    "<td>               $TANGGAL_BARU                                             </td>";
            echo    "<td>               $PMO                                                          </td>";
            echo    "<td> <a href='tabel_tim.php?id_tim=$ID_PROJECT'> $TIM                            </td>";   
            echo    "</tr>";
        }
?>
            </tbody>
        </table>
    </div>
</div>
        </div>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
