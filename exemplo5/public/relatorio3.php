<?php
// require_once './fpdf/fpdf.php';
require_once './tcpdf/tcpdf.php';
require_once '../conexao.php';
require_once '../operacoes.php';

$pdf = new TCPDF();
$pdf->setPrintHeader(false);

// adicionar uma nova página
// AddPage(orientação, tamanho, manterMargens)
// orientação: retrato/padrão ("P"), paisagem ("L")
// tamanho: "A4", "A5", "Letter" ou array com os tamanhos array(100,200)
// manter margens: manter as margens anteriores (true), usar margens padrão ou definidas no início do documento (false)
// para alterar margens usa-se setMargins()
$pdf->AddPage();

// definir a fonte
// setFont(família, estilo, tamanho)
// família: 'helvetica', 'times'...
// estilo: normal (''), negrito ('B'), itálico ('I'), sublinhado ('U') ou uma combinação destes valores.
// tamanho: tamanho em pontos (pt); valor padrão é 0 que mantém o tamanho anterior. Poderia ser usado 12, por exemplo.
$pdf->SetFont('helvetica', '', 14);

// Cell(Largura, Altura, Texto, Borda, QuebraLinha, Alinhamento)
// largura, altura em mm.
// texto: o que será exibido
// borda: sem borda (0), com borda (1) ou lados específicos ("L", "R", "T", "B")
// quebra de linha: mantém a mesma posição após a célula (0), move início da próxima linha (1)
// alinhamento: esquerda ("L"), centralizado ("C") ou direita ("R").
$pdf->Cell(0, 5, 'Listagem de Veículos', 0, 1, 'C');

// nova linha
$pdf->Ln();


// $sql = "SELECT * FROM veiculo";
// $retorno = mysqli_query($conexao, $sql);

$carros = listarVeiculos($conexao);

if (sizeof($carros) > 0) {
    $pdf->Cell(30, 10, 'Cód.', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Km Atual', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Marca', 1, 0, 'C');
    $pdf->Cell(90, 10, 'Modelo', 1, 1, 'C');
    // id, kmatual, marca, modelo
    foreach ($carros as $carro) {
        $pdf->Cell(30, 10, $carro[0], 1, 0, 'C');
        $pdf->Cell(30, 10, $carro[1], 1, 0, 'C');
        $pdf->Cell(30, 10, $carro[2], 1, 0, 'C');
        $pdf->SetFont('helvetica', '', 10);
        $pdf->Cell(90, 10, $carro[3], 1, 1, 'C');
        $pdf->SetFont('helvetica', '', 14);
    }
}

$pdf->Output();
