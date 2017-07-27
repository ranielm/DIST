<?Php
if(!file_exists('fpdf.php')){
	
echo " Place fpdf.php file in this directory before using this page. ";
exit;	
}

if(!file_exists('font')){
	echo " Place font directory in this directory before using this page. ";
exit;	
}

//SESSION
session_start();
$diasemformatacao = $_SESSION['diasemformatacao'];
$diaformatado = $_SESSION['diaformatado'];

require "banco.php"; // connection to database 
$count="select * from relatorios WHERE datadodia = '$diasemformatacao' LIMIT 0,10"; // SQL to get 10 records 
require('fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();

$data = date('d/m/Y');
$titulo = "Estado do banco em " . $diaformatado;

$pdf->SetTitle($titulo);

$width_cell=array(38,37,38,39,38);
$pdf->SetFont('Arial','B',15);

$pdf->SetFillColor(193,229,252); // Background color of header 
// Header starts /// 
$pdf->Cell(0,6,$titulo,0,1,'C');
$pdf->Ln(3);
$pdf->SetFont('Arial','B',12);

$pdf->Cell($width_cell[0],10,'Nome',1,0,C,true); // First header column 
$pdf->Cell($width_cell[1],10,'Quantidade total',1,0,C,true); // Second header column
$pdf->Cell($width_cell[2],10,'Insercoes no dia',1,0,C,true); // Third header column 
$pdf->Cell($width_cell[3],10,'Remocoes no dia',1,0,C,true); // Fourth header column
$pdf->Cell($width_cell[4],10,'Data de validade',1,1,C,true); // Third header column 

//// header ends ///////

$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(235,236,236); // Background color of header 
$fill=false; // to give alternate background fill color to rows 

/// each record is one row  ///
foreach ($dbo->query($count) as $row) {
$pdf->Cell($width_cell[0],10,$row['nome'],1,0,C,$fill);
$pdf->Cell($width_cell[1],10,$row['quantidadetotal'],1,0,C,$fill);
$pdf->Cell($width_cell[2],10,$row['insercoesnodia'],1,0,C,$fill);
$pdf->Cell($width_cell[3],10,$row['remocoesnodia'],1,0,C,$fill);
$pdf->Cell($width_cell[4],10,date('d/m/Y', strtotime($row['datadeexpiracao'])),1,1,C,$fill);
$fill = !$fill; // to give alternate background fill  color to rows
}
/// end of records /// 

$pdf->Output();

?>