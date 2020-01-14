<?php
        //mengambil data id project dari tabel_project
        $id_project = $_GET['id_project'];
                
                        //untuk mendapatkan file json
                        $jsondata = file_get_contents('http://172.26.7.223:1303/api/aktivitas/'.$id_project);
                        $jsondata_tim = file_get_contents('http://172.26.7.223:1303/api/project');


                        //convert json ke data array
                        $data = json_decode($jsondata, true);
                
                        $data_tim = json_decode($jsondata_tim, true);
                
                        //hitung jumlah data di json
                        $count = count($data['DATA']);
                        $JUMLAH_DATA = $count;
                        $count_tim = count($data_tim['DATA']);
                        $JUMLAH_DATA_TIM = $count_tim;
                
                        for($j = 0 ; $j < $JUMLAH_DATA_TIM ; $j++)
                        {
                            $ID_PROJECT         =   $data_tim['DATA'][$j]['ID_PROJECT'];
                            $PROJECT_NAME       =   $data_tim['DATA'][$j]['PROJECT_NAME'];
                            $DIVISI             =   $data_tim['DATA'][$j]['DIVISI'];
                            $STATUSREVIEW       =   $data_tim['DATA'][$j]['STATUSREVIEW'];
                            $ENDDATE            =   $data_tim['DATA'][$j]['ENDDATE'];
                            $PMO                =   $data_tim['DATA'][$j]['PMO'];
                            $TIM                =   $data_tim['DATA'][$j]['TIM'];
                            $PROGRESS           =   $data_tim['DATA'][$j]['PROGRESS'];
                            
                            if($id_project == $ID_PROJECT)
                            {
                                // echo $ID_PROJECT;
                                // echo "<br>";
                                // echo $id_project;
                                // echo "<br>";
                                // echo $PROJECT_NAME;
                                // echo "<br>";
                                $nama_project = $PROJECT_NAME;
                            }
                            
                        }
                        // echo  "<h2 style='text-align: center'>Jumlah Data = $JUMLAH_DATA</h2>";
                // var_dump($data);
                //mendapatkan data projek details
                        for($i = 0 ; $i < $JUMLAH_DATA ; $i++)
                        {
                            $ID_TAHAPAN         =   $data['DATA'][$i]['ID_TAHAPAN'];
                            $ID_AKTIVITAS       =   $data['DATA'][$i]['ID_AKTIVITAS'];
                            $NO_URUT            =   $data['DATA'][$i]['NO_URUT'];
                            $NAME_PROGRESS      =   $data['DATA'][$i]['NAME_PROSES'];
                            $FILE_NAME          =   $data['DATA'][$i]['FILE_NAME'];
                
                            $nomor = $i + 1;
//if pertama untuk URS
// if($NAME_PROGRESS == "Pembuatan User Requirement Specification (URS)" || 
//                             $NAME_PROGRESS == "Dokumentasi Spesifikasi Produk Aplikasi (SPA)" ||
//                             $NAME_PROGRESS == "Melakukan User Acceptance Test (UAT) - Dok. RPHUA" ||
// )
                if(strcmp($NAME_PROGRESS,"Pembuatan User Requirement Specification (URS)") == 0 && strcmp($FILE_NAME,"N") == 0)
                {
                    $bg_urs =  "bgcolor='#C0392B'";
                    $warna_urs_1 = '255'; 
                    $warna_urs_2 = '0';
                    $warna_urs_3 = '0';
                }                
                else
                if(strcmp($NAME_PROGRESS,"Pembuatan User Requirement Specification (URS)") == 0 && strcmp($FILE_NAME,"Y") == 0)
                {
                    $bg_urs =  "bgcolor='#2ECC71'";
                    $warna_urs_1 = '0'; 
                    $warna_urs_2 = '128';
                    $warna_urs_3 = '0';
                
                }  
          
//if kedua untuk SPA            
                if(strcmp($NAME_PROGRESS,"Dokumentasi Spesifikasi Produk Aplikasi (SPA)") == 0 && strcmp($FILE_NAME,"N") == 0)
                {
                    $bg_spa =  "bgcolor='#C0392B'";
                    $warna_spa_1 = '255'; 
                    $warna_spa_2 = '0';
                    $warna_spa_3 = '0';
                }
                else
                if(strcmp($NAME_PROGRESS,"Dokumentasi Spesifikasi Produk Aplikasi (SPA)") == 0 && strcmp($FILE_NAME,"Y") == 0)
                {
                    $bg_spa =  "bgcolor='#2ECC71'"; 
                    $warna_spa_1 = '0'; 
                    $warna_spa_2 = '128';
                    $warna_spa_3 = '0';
                } 
            
//if ketiga untuk RPHUA
            if(strcmp($NAME_PROGRESS,"Melakukan User Acceptance Test (UAT) - Dok. RPHUA") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_rphua =  "bgcolor='#C0392B'";
                $warna_rphua_1 = '255'; 
                $warna_rphua_2 = '0';
                $warna_rphua_3 = '0';
            }
            else
            if(strcmp($NAME_PROGRESS,"Melakukan User Acceptance Test (UAT) - Dok. RPHUA") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_rphua =  "bgcolor='#2ECC71'"; 
                $warna_rphua_1 = '0'; 
                $warna_rphua_2 = '128';
                $warna_rphua_3 = '0';
            }                
//if keempat untuk SDD
            if(strcmp($NAME_PROGRESS,"Dokumentasi Desain Sistem (SDD)") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_sdd =  "bgcolor='#C0392B'";
                $warna_sdd_1 = '255'; 
                $warna_sdd_2 = '0';
                $warna_sdd_3 = '0';
            }
            else
            if(strcmp($NAME_PROGRESS,"Dokumentasi Desain Sistem (SDD)") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_sdd =  "bgcolor='#2ECC71'"; 
                $warna_sdd_1 = '0'; 
                $warna_sdd_2 = '128';
                $warna_sdd_3 = '0';
            }
  
//if kelima untuk SRS
            if(strcmp($NAME_PROGRESS,"Dokumentasi Analisis Sistem (SRS)") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_srs =  "bgcolor='#C0392B'";
                $warna_srs_1 = '255'; 
                $warna_srs_2 = '0';
                $warna_srs_3 = '0';
            }
            else
            if(strcmp($NAME_PROGRESS,"Dokumentasi Analisis Sistem (SRS)") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_srs =  "bgcolor='#2ECC71'"; 
                $warna_srs_1 = '0'; 
                $warna_srs_2 = '128';
                $warna_srs_3 = '0';
            } 
            
//if keenam untuk UM
            if(strcmp($NAME_PROGRESS,"Testing Selesai - Dok. User Manual") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_um =  "bgcolor='#C0392B'";
                $warna_um_1 = '255'; 
                $warna_um_2 = '0';
                $warna_um_3 = '0';
                
            }
            else
            if(strcmp($NAME_PROGRESS,"Testing Selesai - Dok. User Manual") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_um =  "bgcolor='#2ECC71'"; 
                $warna_um_1 = '0'; 
                $warna_um_2 = '128';
                $warna_um_3 = '0';
            }


//if ketujuh untuk QA plan            
            if(strcmp($NAME_PROGRESS,"Dokumen Quality Assurance (QA) Plan") == 0 && strcmp($FILE_NAME, "N") == 0)
            {
                $bg_qa =  "bgcolor='#C0392B'";
                $warna = '255,0,0';
                $warna_qa_1 = '255'; 
                $warna_qa_2 = '0';
                $warna_qa_3 = '0';
            }       
            else
            if(strcmp($NAME_PROGRESS,"Dokumen Quality Assurance (QA) Plan") == 0 && strcmp($FILE_NAME, "Y") == 0)
            {
                $bg_qa =  "bgcolor='#2ECC71'";
                $warna_qa_1 = '0'; 
                $warna_qa_2 = '128';
                $warna_qa_3 = '0';
            }            
        }
         
?>

<?php
require('fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('L','mm','A4');
// Menambah halaman baru
$pdf->AddPage();

// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(280,8,'BPJS TK',0,1,'C');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,8,'JAKARTA SELATAN',0,1,'C');

$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,8,'TABEL LAPORAN AKTIVITAS',0,1,'C');

$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,6,'NO','LTR',0,'C');
$pdf->Cell(180,6,'Nama Project','LTR',0,'C');
$pdf->Cell(85,6,'Dokumen',1,1,'C');

$pdf->Cell(10,6,'','LR',0);
$pdf->Cell(180,6,'','LBR',0);
$pdf->Cell(10,6,'BRD',1,0,'C');
$pdf->Cell(20,6,'GA PLAN',1,0,'C');
$pdf->Cell(10,6,'URS',1,0,'C');
$pdf->Cell(10,6,'SDD',1,0,'C');
$pdf->Cell(10,6,'SPA',1,0,'C');
$pdf->Cell(15,6,'RPHUA',1,0,'C');
$pdf->Cell(10,6,'UA',1,1,'C');
                // echo    "<td>1</td>";
            
                // echo    "<td>$nama_project</td>";
                // echo    "<td> </td>";
                // echo    "<td></td>";
                // echo    "<td $bg_urs></td>";
                // echo    "<td $bg_srs></td>";
                // echo    "<td $bg_sdd</td>";
                // echo    "<td $bg_spa></td>";
                // echo    "<td $bg_rphua></td>";
                // echo    "<td $bg_um></td>";
 
                $pdf->Cell(10,12,'1',1,0,'C');
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(180,12,$nama_project,1,0);

                $pdf->SetFont('Arial','B',10);
                $pdf->SetFillColor(0,128,0);
                $pdf->Cell(10,12,'',1,0,'',TRUE); 


                $pdf->SetFillColor($warna_qa_1,$warna_qa_2,$warna_qa_3);
                $pdf->Cell(20,12,'',1,0,'',TRUE);

                $pdf->SetFillColor($warna_urs_1,$warna_urs_2,$warna_urs_3);
                $pdf->Cell(10,12,'',1,0,'',TRUE);

                $pdf->SetFillColor($warna_sdd_1,$warna_sdd_2,$warna_sdd_3);
                $pdf->Cell(10,12,'',1,0,'',TRUE);

                $pdf->SetFillColor($warna_spa_1,$warna_spa_2,$warna_spa_3);
                $pdf->Cell(10,12,'',1,0,'',TRUE);

                $pdf->SetFillColor($warna_rphua_1,$warna_rphua_2,$warna_rphua_3);
                $pdf->Cell(15,12,'',1,0,'',TRUE);

                $pdf->SetFillColor($warna_um_1,$warna_um_2,$warna_um_3);
                $pdf->Cell(10,12,'',1,1,'',TRUE);                
                $pdf->Output();
?>