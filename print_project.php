<?php
require('mc_table.php');
$pdf=new PDF_MC_Table('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(280,7,'BPJS TK',0,1,'C');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(280,7,'JAKARTA SELATAN',0,1,'C');

$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,7,'LAPORAN PROJECT',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);  
$pdf->SetFont('Arial','B',14);
//Table with total  rows and 7 columns
$pdf->SetWidths(array(10,70,50,50,40,40,15));
$pdf->SetFont('Arial','B',14);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(70,7,'Nama Project',1,0,'C');
$pdf->Cell(50,7,'Progress',1,0,'C');
$pdf->Cell(50,7,'Divisi',1,0,'C');
$pdf->Cell(40,7,'Tanggal Selesai',1,0,'C');
$pdf->Cell(40,7,'PMO',1,0,'C');
$pdf->Cell(15,7,'TIM',1,1,'C');
// $pdf->Row(array('NO','NAMA PROJECT',
// "PROGRESS",'DIVISI','TANGGAL SELESAI','PMO', 'TIM'));
$pdf->SetFont('Arial','',14);
            // //link atau file json diketik di sini
            $json                   =   'http://172.26.7.223:1303/api/project';
            //untuk mendapatkan file json
            $jsondata               =   file_get_contents($json);
            //convert json ke data array
            $data                   =   json_decode($jsondata, true);
            //hitung jumlah data di json
            $count                  =   count($data['DATA']);
            $JUMLAH_DATA            =   $count;
            // //menampilkan jumlah data dari json
            // echo  "<h2 style='text-align: center'>  Jumlah Data = $JUMLAH_DATA  </h2>";
            //mendapatkan data projek details
            for($i = 0 ; $i < $count ; $i++)
            {
                //menyimpan data di variabel
                $ID_PROJECT         =   $data['DATA'][$i]['ID_PROJECT'];
                $PROJECT_NAME       =   $data['DATA'][$i]['PROJECT_NAME'];
                $DIVISI             =   $data['DATA'][$i]['DIVISI'];
                $STATUSREVIEW       =   $data['DATA'][$i]['STATUSREVIEW'];
                $ENDDATE            =   $data['DATA'][$i]['ENDDATE'];
                $PMO                =   $data['DATA'][$i]['PMO'];
                $TIM                =   $data['DATA'][$i]['TIM'];
                $PROGRESS           =   $data['DATA'][$i]['PROGRESS'];
                //menampilkan no angka
                $nomor              =   $i +1;
                //data dimasukkan ke tabel
                $pdf->Row(array($nomor,$PROJECT_NAME,
                $PROGRESS,$DIVISI,$ENDDATE,$PMO, $TIM));
            }
 
// rand(microtime()*1000000); 
// for($i=0;$i<20;$i++)
$pdf->Output();
?>