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
$pdf->Cell(100, 8, 'Lista de Clientes', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'N', 0);
$pdf->Cell(30, 8, 'Nombre', 0);
$pdf->Cell(30, 8, 'Apellido', 0);
$pdf->Cell(30, 8, 'DUI', 0);
$pdf->Cell(40, 8, 'Direccion', 0);
$pdf->Cell(25, 8, 'Telefono', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$clientes = mysql_query("SELECT * FROM clientes");
$item = 0;
while($fila = mysql_fetch_array($clientes)){
	$item = $item+1;
	$pdf->Cell(10, 8,$item, 0);
	$pdf->Cell(30, 8, $fila['nombre'], 0);
	$pdf->Cell(30, 8, $fila['apellido'], 0);
	$pdf->Cell(30, 8, $fila['dui'], 0);
	$pdf->Cell(40, 8, $fila['direccion'], 0);
	$pdf->Cell(25, 8, $fila['telefono'], 0);
	$pdf->Ln(8);
}

$pdf->Output();
?>