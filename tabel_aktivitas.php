<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tabel Aktivitas</title>
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
  <link rel="stylesheet" href="plugins/su   mmernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
        <a href="view_project.php" class="nav-link">List Project</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="view_workload.php" class="nav-link">List Workload</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="tabel_aktivitas.php" class="nav-link active">List Aktivitas</a>
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
                <a href="./view_project.php" class="nav-link">
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
                <a href="./tabel_aktivitas.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Data Aktivitas</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>      <!-- /.sidebar-menu -->
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
            <h1 class="m-0 container text-dark">Tabel Aktivitas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="tabel_aktivitas.php">Tabel Aktivitas</a></li>
              
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
            <div class="small-box bg-success">
              <div class="inner">
                <h1>Print</h1>
                <p>Print Dokumen Laporan</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="print_semua_laporan_aktivitas.php" target="blank_" class="small-box-footer">Print Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        <!-- /.row -->
        <!-- Main row -->    
        
          </section>
    <div class="container" align="center">
    <h1 style="text-align: center;">Tabel Laporan Aktivitas <? echo $ID_PROJECT ?> </h1>
<hr>
<br>
<br>
<div class="container">
    <div class="content">
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th rowspan="1">No</th>                            
                    <th rowspan="1">Nama Project</th>
                    <th colspan="3"></th>
                    <th colspan="4">Dokumen</th>
                </tr>
                <tr>
                    <th colspan="2">
                    </th>
                    <th>
                        BRD
                    </th>
                    <th>
                        QA PLAN
                    </th>
                    <th>
                        URS
                    </th>
                    <th>
                        SRS                         
                    </th>
                    <th>
                        SDD
                    </th>
                    <th>
                        SPA
                    </th>
                    <th>
                        RPHUA
                    </th>
                    <th>
                        UM
                    </th>
                </tr>
                </thead>

<?php

//deklarasikan background awal warna merah
$bg_urs =  "bgcolor='#C0392B'";
$bg_srs =  "bgcolor='#C0392B'";
$bg_sdd =  "bgcolor='#C0392B'";
$bg_spa =  "bgcolor='#C0392B'";
$bg_rphua =  "bgcolor='#C0392B'";
$bg_um =  "bgcolor='#C0392B'";
$bg_qa =  "bgcolor='#C0392B'";



                
                        //untuk mendapatkan file json
                        // $jsondata = file_get_contents('http://172.26.7.223:1303/api/aktivitas/'.$id_project);
                        $jsondata_tim = file_get_contents('http://172.26.7.223:1303/api/project');
                
                        //convert json ke data array
                        // $data = json_decode($jsondata, true);
                
                        $data_tim = json_decode($jsondata_tim, true);
                
                        //hitung jumlah data di json
                        // $count = count($data['DATA']);
                        // $JUMLAH_DATA = $count;
                        $count_tim = count($data_tim['DATA']);
                        $JUMLAH_DATA_TIM = $count_tim;
                        
                
                        for($j = 0 ; $j < $count_tim ; $j++)
                        {
                            $ID_PROJECT         =   $data_tim['DATA'][$j]['ID_PROJECT'];
                            $PROJECT_NAME       =   $data_tim['DATA'][$j]['PROJECT_NAME'];
                            $DIVISI             =   $data_tim['DATA'][$j]['DIVISI'];
                            $STATUSREVIEW       =   $data_tim['DATA'][$j]['STATUSREVIEW'];
                            $ENDDATE            =   $data_tim['DATA'][$j]['ENDDATE'];
                            $PMO                =   $data_tim['DATA'][$j]['PMO'];
                            $TIM                =   $data_tim['DATA'][$j]['TIM'];
                            $PROGRESS           =   $data_tim['DATA'][$j]['PROGRESS'];
                            $DATA_TOTAL         =   $data_tim['TOTAL'];
                            
                            $nomor = $j + 1;

                            echo    "<td>$nomor</td>";
                            echo    "<td>$PROJECT_NAME</td>";


                            $jsondata = file_get_contents('http://172.26.7.223:1303/api/aktivitas/'.$ID_PROJECT);
                            $data = json_decode($jsondata, true);
                            $count = count($data['DATA']);
                            $JUMLAH_DATA = $count;                            
                        // }
                        // echo  "<h2 style='text-align: center'>Jumlah Data = $JUMLAH_DATA</h2>";
                // var_dump($data);
                //mendapatkan data projek details
                        for($i = 0 ; $i < $count ; $i++)
                        {   
                            // $ID_TAHAPAN         =   $data['DATA'][$i]['ID_TAHAPAN'];
                            // $ID_AKTIVITAS       =   $data['DATA'][$i]['ID_AKTIVITAS'];
                            // $NO_URUT            =   $data['DATA'][$i]['NO_URUT'];
                            // $NAME_PROGRESS      =   $data['DATA'][$i]['NAME_PROSES'];
                            // $FILE_NAME          =   $data['DATA'][$i]['FILE_NAME'];

                            $ID_TAHAPAN         =   $data['DATA'][$i]['ID_TAHAPAN'];
                            $ID_AKTIVITAS       =   $data['DATA'][$i]['ID_AKTIVITAS'];
                            $NO_URUT            =   $data['DATA'][$i]['NO_URUT'];
                            $NAME_PROGRESS      =   $data['DATA'][$i]['NAME_PROSES'];
                            $FILE_NAME          =   $data['DATA'][$i]['FILE_NAME'];
                

//if pertama untuk URS
                if(strcmp($NAME_PROGRESS,"Pembuatan User Requirement Specification (URS)") == 0 && strcmp($FILE_NAME,"N") == 0)
                {
                    $bg_urs =  "bgcolor='#C0392B'";
                }                
                else
                
                if(strcmp($NAME_PROGRESS,"Pembuatan User Requirement Specification (URS)") == 0 && strcmp($FILE_NAME,"Y") == 0)
                {
                    $bg_urs =  "bgcolor='#008000'";
                }  
                

                else


                
//if kedua untuk SPA            
                if(strcmp($NAME_PROGRESS,"Dokumentasi Spesifikasi Produk Aplikasi (SPA)") == 0 && strcmp($FILE_NAME,"N") == 0)
                {
                    $bg_spa =  "bgcolor='#C0392B'";
                }
                else
                if(strcmp($NAME_PROGRESS,"Dokumentasi Spesifikasi Produk Aplikasi (SPA)") == 0 && strcmp($FILE_NAME,"Y") == 0)
                {
                    $bg_spa =  "bgcolor='#008000'"; 
                } 

                else
            
//if ketiga untuk RPHUA
            if(strcmp($NAME_PROGRESS,"Melakukan User Acceptance Test (UAT) - Dok. RPHUA") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_rphua =  "bgcolor='#C0392B'";
            }
            else
            if(strcmp($NAME_PROGRESS,"Melakukan User Acceptance Test (UAT) - Dok. RPHUA") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_rphua =  "bgcolor='#008000'"; 
            }              
            
            else


//if keempat untuk SDD
            if(strcmp($NAME_PROGRESS,"Dokumentasi Desain Sistem (SDD)") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_sdd =  "bgcolor='#C0392B'";
            }
            else
            if(strcmp($NAME_PROGRESS,"Dokumentasi Desain Sistem (SDD)") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_sdd =  "bgcolor='#008000'"; 
            }
  
            else

//if kelima untuk SRS
            if(strcmp($NAME_PROGRESS,"Dokumentasi Analisis Sistem (SRS)") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_srs =  "bgcolor='#C0392B'";
            }
            else
            if(strcmp($NAME_PROGRESS,"Dokumentasi Analisis Sistem (SRS)") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_srs =  "bgcolor='#008000'"; 
            } 
            
            else

//if keenam untuk UM
            if(strcmp($NAME_PROGRESS,"Testing Selesai - Dok. User Manual") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_um =  "bgcolor='#C0392B'";
            }
            else
            if(strcmp($NAME_PROGRESS,"Testing Selesai - Dok. User Manual") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_um =  "bgcolor='#008000'"; 
            }

            else
//if ketujuh untuk QA plan            
            if(strcmp($NAME_PROGRESS,"Dokumen Quality Assurance (QA) Plan") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_qa =  "bgcolor='#C0392B'";
            }
            else
            if(strcmp($NAME_PROGRESS,"Dokumen Quality Assurance (QA) Plan") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_qa =  "bgcolor='#008000'"; 
            }           



        }
        echo    "<td bgcolor='#008000'></td>";
        echo    "<td $bg_qa></td>";
        echo    "<td $bg_urs></td>";
        echo    "<td $bg_srs></td>";
        echo    "<td $bg_sdd</td>";
        echo    "<td $bg_spa></td>";
        echo    "<td $bg_rphua></td>";
        echo    "<td $bg_um></td>";
        echo    "</tr>";
    }
       
        //data 53 perbaikan aplikasi OSS ada perbedaan di URS : gak tau dimana bedanya
        //data lain bener semua
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
