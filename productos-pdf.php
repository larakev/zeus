<?php
require('/fpdf/fpdf.php');
require('db.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 10, 'Muebleria Zeus', 0);
$pdf->Cell(30, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'Lista de Productos', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'N', 0);
$pdf->Cell(25, 8, 'Tipo', 0);
$pdf->Cell(30, 8, 'Marca', 0);
$pdf->Cell(30, 8, 'N Serial', 0);
$pdf->Cell(15, 8, 'Precio', 0);
$pdf->Cell(20, 8, 'Existencias', 0);
$pdf->Cell(25, 8, 'Descripcion', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$clientes = mysql_query("SELECT * FROM productos");
$item = 0;
while($fila = mysql_fetch_array($clientes)){
	$item = $item+1;
	$pdf->Cell(10, 8,$item, 0);
	$pdf->Cell(25, 8, $fila['tipo'], 0);
	$pdf->Cell(30, 8, $fila['marca'], 0);
	$pdf->Cell(30, 8, $fila['nserial'], 0);
	$pdf->Cell(15, 8, '$ '.$fila['precio'], 0);
	$pdf->Cell(20, 8, $fila['existencias'], 0);
	$pdf->Cell(25, 8, $fila['descripcion'], 0);
	$pdf->Ln(8);
}

$pdf->Output();
?>