<?php
require_once "conexao.php";
require_once "operacoes.php";

$cliente = 1;
$funcionario = 1;
$carros = [2, 4];

// salvar o emprestimo
$idemprestimo = salvarEmprestimo($conexao, $funcionario, $cliente);

// salvar os veiculos
foreach ($carros as $id) {
    salvarVeiculoEmprestimo($conexao, $idemprestimo, $id);
}
?>