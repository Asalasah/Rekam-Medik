<?php
include('db.php');
require('fpdf/fpdf.php');


class PDF extends FPDF{
	// Page header
	function Header()
	{
		// Logo
		$this->Image('rekammedik.png',120,2,60,25);
		
		
		//$this->SetFont('Arial','B',24);
		//$this->Cell(10);
		//$this->Cell(0,10,'The Shop',0,1,'C');
		
		$this->SetFont('Arial','',12);
		$this->Cell(0,35,'Jalan Imam Bonjol No: 13 Banda Aceh, Telp : (0651) 424561 ',0,1,'C');
		$this->Cell(0,-20,'Find us! Twitter :@rekam_medik , Email : rekammedik@gmail.com ',0,1,'C');
		$this->Cell(0,35,'Website : http://rekam-medik.pusku.com',0,1,'C');
		$this->Cell(5);
		
		$this->SetFont('Arial','B',15);
		//$pdf->SetFont('Courier','B',16);
		$this->SetTextColor(30,10,60);

//bingkai

		$this->SetDrawColor(60,10,100);
		$this->Cell(0,10,'Laporan Rekam Medik',0,0,'C');
		$this->Cell(3);
		
		$this->setLineWidth(2);
		$this->Line(10,50,285,50); //atas
		$this->Ln(20);
	}
	
	function Footer()
	{
		
		$this->SetY(-15);
		$this->SetFont('Arial','I',15);
		$this->Cell(0,5,'Laporan Rekam Medik',0,0,'C');
	}
}
// Instanciation of inherited class
$pdf = new PDF('L','mm','A4');
//$pdf = new PDF();
$pdf->AddPage();

		$sql=("select * from pasien where status='staf'");  
		$query1 = mysql_query($sql);
		
$pdf->SetFont('Arial','B',12);

$pdf->Cell(15,7,'Kode',1,0,'C');
$pdf->Cell(34,7,'Nama',1,0,'C');
$pdf->Cell(20,7,'TTL',1,0,'C');
$pdf->Cell(50,7,'Alamat',1,0,'C');
$pdf->Cell(35,7,'No Hp',1,0,'C');
$pdf->Cell(40,7,'Keluhan',1,0,'C');
$pdf->Cell(35,7,'Resep',1,0,'C');
$pdf->Cell(35,7,'Status',1,0,'C');
$pdf->Ln(7);

 
   while($tampil=mysql_fetch_array($query1)) {
   $pdf->SetFont('Arial','',12);
   $kodepasien=$tampil['kodepasien'];
   $nama=$tampil['nama'];
   $tangallahir=$tampil['tangallahir'];
   $alamat=$tampil['alamat'];
    $hp=$tampil['hp'];
   $keluhan=$tampil['keluhan'];
    $resep=$tampil['resep'];
	 $status=$tampil['status'];
   
$pdf->Cell(15,7,$kodepasien,1,0,'C');   
$pdf->Cell(34,7,$nama,1,0,'C');
$pdf->Cell(20,7,$tangallahir,1,0,'C');
$pdf->Cell(50,7,$alamat,1,0,'C');
$pdf->Cell(35,7,$hp,1,0,'C');
$pdf->Cell(40,7, $keluhan,1,0,'C');
$pdf->Cell(35,7,$resep,1,0,'C');
$pdf->Cell(35,7,$status,1,0,'C');
  $pdf->Ln(7);
   }
  

$pdf->Output();
?>