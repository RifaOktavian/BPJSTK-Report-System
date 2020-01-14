<?php
        //link atau file untuk memasukkan json
        $json                           =   'http://172.26.7.223:1303/api/workload';
        //untuk mendapatkan file json
        $jsondata                       =   file_get_contents($json);
        //convert json ke data array
        $data                           =   json_decode($jsondata, true);
        //hitung jumlah data di json
        $count                          =   count($data['DATA']);
        $JUMLAH_DATA                    =   $count;
            require('fpdf.php');
            // Setting halaman PDF
            $pdf = new FPDF('L','mm','A4');
            // Menambah halaman baru
            $pdf->AddPage();
            // Setting jenis font
            $pdf->SetFont('Arial','B',16);
            // Membuat string
            $pdf->Cell(280,7,'BPJS TK',0,1,'C');
            
            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(280,7,'Jakarta Selatan',0,1,'C');

            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(280,7,'TABEL WORKLOAD',0,1,'C');
            // Setting spasi kebawah supaya tidak rapat
            $pdf->Cell(10,7,'',0,1);         
            
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(10,6,'NO','LTR',0,'C');
            $pdf->Cell(60,6,'Nama Lengkap','LTR',0,'C');
            $pdf->Cell(25,6,'NPK','LTR',0,'C');
            $pdf->Cell(120,6,'Job Title','LTR',0,'C');
            $pdf->Cell(65,6,'Total','LTR',1,'C');

            $pdf->Cell(10,6,'','LBR',0);
            $pdf->Cell(60,6,'','LBR',0);
            $pdf->Cell(25,6,'','LBR',0);
            $pdf->Cell(120,6,'','LBR',0);
            $pdf->Cell(25,6,'In Progress ',1,0,'C');
            $pdf->Cell(20,6,'Rilis',1,0,'C');
            $pdf->Cell(20,6,'Closed',1,1,'C');
            
            
            
            //mendapatkan data projek details
            for($i = 0 ; $i < $count ; $i++)
            {
                 //menyimpan data workload di variabel
            $KODE_USER          =   $data['DATA'][$i]['KODE_USER'];
            $NAMA_USER          =   $data['DATA'][$i]['NAMA_USER'];
            $NIK                =   $data['DATA'][$i]['NIK'];
            $JOBTITLE           =   $data['DATA'][$i]['JOBTITLE'];
            $TOTAL_IN           =   $data['DATA'][$i]['TOTAL_IN'];
            $TOTAL_RILIS        =   $data['DATA'][$i]['TOTAL_RILIS'];
            $TOTAL_CLOSED       =   $data['DATA'][$i]['TOTAL_CLOSED'];
            $DATA_TOTAL         =   $data['TOTAL'];
            //menghitung nomor urut
            $nomor = $i + 1;
                //data dimasukkan ke tabel
                // echo    "<td>               $nomor                                      </td>";
                // echo    "<td> <a href='coba_warna.php?id_project=$ID_PROJECT'>$PROJECT_NAME  </td>";
                // echo    "<td>               $PROGRESS                                   </td>";
                // echo    "<td>               $DIVISI                                     </td>";
                // echo    "<td>               $ENDDATE                                    </td>";
                // echo    "<td>               $PMO                                        </td>";
                // echo    "<td> <a href='tabel_tim.php?id_tim=$ID_PROJECT'> $TIM          </td>";   
                $pdf->Cell(10,6,$nomor,1,0,'C');
                $pdf->Cell(60,6,$NAMA_USER,1,0);
                $pdf->Cell(25,6,$NIK,1,0,'C');
                $pdf->Cell(120,6,$JOBTITLE,1,0);
                $pdf->Cell(25,6,$TOTAL_RILIS,1,0,'C');
                $pdf->Cell(20,6,$TOTAL_IN,1,0,'C');
                $pdf->Cell(20,6,$TOTAL_CLOSED,1,1,'C');           
                //memunculkan tombol untuk print
                // echo    "<td>   <a href='#' class='btn btn-primary'>    Cetak</a></td>";
                // echo    "</tr>";
            }
            // Koneksi library FPDF
$pdf->Output();
    ?>


                </tbody>
            </table>
        </div>
    </div>

    </body>
    </html>



<?php
// // Koneksi library FPDF
// require('fpdf.php');
// // Setting halaman PDF
// $pdf = new FPDF('L','mm','A4');
// // Menambah halaman baru
// $pdf->AddPage();
// // Setting jenis font
// $pdf->SetFont('Arial','B',16);
// // Membuat string
// $pdf->Cell(190,7,'Daftar Harga Motor Dealer Maju Motor',0,1,'C');
// $pdf->SetFont('Arial','B',9);
// $pdf->Cell(190,7,'Jl. Abece No. 80 Kodamar, jakarta Utara.',0,1,'C');
// // Setting spasi kebawah supaya tidak rapat
// $pdf->Cell(10,7,'',0,1);
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(10,6,'NO',1,0);
// $pdf->Cell(80,6,'Nama Project',1,0);
// $pdf->Cell(35,6,'Progress',1,0);
// $pdf->Cell(70,6,'Divisi',1,0);
// $pdf->Cell(50,6,'Tanggal Selesai ',1,0);
// $pdf->Cell(40,6,'PMO',1,1);
// $pdf->Cell(10,6,'1',1,0);
// $pdf->Cell(80,6,'Aplikasi Pemberitahuan Konfirmasi Ulang Jaminan Pensiun Berkala',1,0);
// $pdf->Cell(35,6,'PERENCANAAN',1,0);
// $pdf->Cell(70,6,'DIVISI SEKRETARIS BADAN',1,0);
// $pdf->Cell(50,6,'2019-12-30T17:00:00.000Z',1,0);
// $pdf->Cell(40,6,'ATTA UL QUDDUS',1,1);
// $pdf->Output();
?>