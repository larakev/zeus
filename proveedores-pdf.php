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
$pdf->Cell(100, 8, 'Lista de Proveedores', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'N', 0);
$pdf->Cell(30, 8, 'Empresa', 0);
$pdf->Cell(30, 8, 'Vendedor', 0);
$pdf->Cell(40, 8, 'Direccion', 0);
$pdf->Cell(25, 8, 'Telefono', 0);
$pdf->Cell(30, 8, 'Celular', 0);
$pdf->Cell(30, 8, 'E-mail', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$clientes = mysql_query("SELECT * FROM proveedores");
$item = 0;
while($fila = mysql_fetch_array($clientes)){
	$item = $item+1;
	$pdf->Cell(10, 8,$item, 0);
	$pdf->Cell(30, 8, $fila['empresa'], 0);
	$pdf->Cell(30, 8, $fila['vendedor'], 0);
	$pdf->Cell(40, 8, $fila['direccion'], 0);
	$pdf->Cell(25, 8, $fila['telefono'], 0);
	$pdf->Cell(30, 8, $fila['celular'], 0);
	$pdf->Cell(30, 8, $fila['email'], 0);
	$pdf->Ln(8);
}
$pdf->Output();
?>