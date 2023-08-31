<?php 
include "../../controller/coursC.php";


if (isset($_POST['Idcours'])){
$cours1C=new CoursC();
$result=$cours1C->recupererCours($_POST["Idcours"]);


require('fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();
//$pdf->Image('logo3.png',10,10,30);
$pdf->Ln() ;

$pdf->Ln() ;
$pdf->SetFont('Arial','B',30);

 //Rue Banane , Charguia 2 , 2035 Ariana,Tunis

$pdf->cell(80,20,'Detail du cours:',0,0,'C');

$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(35,10,'Id cours',1,0,'C');
$pdf->cell(35,10,'Titre',1,0,'C');
$pdf->cell(40,10,'Description',1,0,'C');
$pdf->cell(40,10,'La date',1,0,'C');
$pdf->Ln(); 
foreach($result as $row)
{
    $pdf->cell(35,10,$row['Idcours'],1,0,'C'); 
	$pdf->cell(35,10,$row['description'],1,0,'C');
	$pdf->cell(40,10,$row['title'],1,0,'C');
	$pdf->cell(40,10,$row['date'],1,0,'C');
	$pdf->Ln();
	
}	

$pdf->Output();
}
?>