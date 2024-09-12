<?php

require_once "../conexao.php";
require_once "../operacoes.php";

$idfuncionario = $_GET['idfuncionario'];
$idcliente = $_GET['idcliente'];
$carros = $_GET['carros'];

// grava o empréstimo e armazena o id gerado
$idemprestimo = salvarEmprestimo($conexao, $idfuncionario, $idcliente);

// grava cada um dos carros selecionados
foreach ($carros as $carro) {
    salvarVeiculoEmprestimo($conexao, $idemprestimo, $carro);
}

header("Location: index.html");
?>