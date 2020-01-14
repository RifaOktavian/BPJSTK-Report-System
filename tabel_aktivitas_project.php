<!Doctype Html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Tabel Aktivitas</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<h1 style="text-align: center;">Tabel Aktivitas</h1>
<hr>
<br>
<br>

<center>
    <a href="tabel_project.php" class="btn btn-primary">Kembali</a>
    <a href="tabel_workload.php" class="btn btn-primary">Tabel Workload</a>
</center>

<div class="container">
    <div class="content">
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th>Nomor</th>                            
                    <th>No Urut</th>
                    <th>Nama Proses</th>
                    <th>File Name</th>
                </tr>
                <tr>
    <?php
        //mengambil data id project dari tabel_project
        $ID_PROJECT = $_POST['id_project_cari'];

        //link atau file untuk memasukkan json
        $json                           =   'http://172.26.7.223:1303/api/aktivitas/'.$ID_PROJECT;

        //untuk mendapatkan file json
        $jsondata                       =   file_get_contents($json);
        
        // $id_project = $_GET['id_project']
        // <?=id_project_cari;
        //convert json ke data array
        $data                           =   json_decode($jsondata, true);


        //hitung jumlah data di json
        $count                          =   count($data['DATA']);

        $JUMLAH_DATA                    =   $count;

        //menampilkan jumlah data di atas sebagai header
        echo  "<h2 style='text-align: center'>  Jumlah Data = $JUMLAH_DATA  </h2>";
        
        
// var_dump($data);
//mendapatkan data projek details
        for($i = 0 ; $i < $count ; $i++)
        {
            //menyimpan data workload di variabel
            $ID_TAHAPAN             =   $data['DATA'][$i]['ID_TAHAPAN'];
            $ID_AKTIVITAS           =   $data['DATA'][$i]['ID_AKTIVITAS'];
            $NO_URUT                =   $data['DATA'][$i]['NO_URUT'];
            $NAMA_PROSES            =   $data['DATA'][$i]['NAME_PROSES'];
            $FILE_NAME              =   $data['DATA'][$i]['FILE_NAME'];
            $DATA_TOTAL             =   $data['TOTAL'];

            //menghitung nomor urut
            $nomor = $i + 1;

            //memasukkan data workload ke dalam tabel
            echo    "<td>                   $nomor                                      </td>";
            echo    "<td>                   $NO_URUT                                    </td>";
            echo    "<td>                   $NAMA_PROSES                                </td>";
            echo    "<td>                   $FILE_NAME                                  </td>";   
            echo    "<td>   <a href='#' class='btn btn-primary'>    Cetak   </a>        </td>";
            echo    "</tr>";
        }
        
        //menampilkan jumlah data json di bawah tabel
        echo        "<tr>";
        echo        "<td colspan = '8'>     DATA TOTAL = $DATA_TOTAL                    </td>";
        echo        "</tr>";

        echo "<br>";


?>


            </tbody>
        </table>
    </div>
</div>
</body>
</html>
