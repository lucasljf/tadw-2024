<?php
// Inclui a biblioteca TCPDF
require_once('tcpdf/tcpdf.php');

// Cria um novo PDF
$pdf = new TCPDF();

// Desabilita o cabeçalho para remover a linha horizontal
$pdf->setPrintHeader(false);

// Adiciona uma página
$pdf->AddPage();

// Define a fonte
$pdf->SetFont('helvetica', '', 20);

// Adiciona texto ao PDF
$pdf->Cell(0, 10, 'Exemplo de Relatório com TCPDF', 0, 1, 'C');

// Gera o PDF no navegador
$pdf->Output();
?>
