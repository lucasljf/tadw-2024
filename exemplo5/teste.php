<?php

require_once "conexao.php";
require_once "operacoes.php";

// $nome = "Fulano";
// salvarCliente($conexao, $nome);

// $nome = "Func. Fulano";
// salvarFuncionario($conexao, $nome);

// $km = "20000";
// $marca = "volks";
// $modelo = "fox";
// salvarVeiculo($conexao, $km, $marca, $modelo);

// $km = "1500";
// $marca = "toyota";
// $modelo = "supra";
// salvarVeiculo($conexao, $km, $marca, $modelo);

// $km = "5000";
// $marca = "mazda";
// $modelo = "mx5";
// salvarVeiculo($conexao, $km, $marca, $modelo);

// $km = "350000";
// $marca = "nissan";
// $modelo = "skyline";
// salvarVeiculo($conexao, $km, $marca, $modelo);

// $funcionario = 1;
// $cliente = 1;
// salvarEmprestimo($conexao, $funcionario, $cliente);

// $veiculo = 1;
// echo(kmInicialVeiculo($conexao, $veiculo));

// $emprestimo = 1;
// $veiculo = 1;
// salvarVeiculoEmprestimo($conexao, $emprestimo, $veiculo);

$emprestimo = 1;
$valor = 500.40;
$precokm = 3.40;
$metodo = 'a vista';
efetuarPagamento($conexao, $emprestimo, $valor, $precokm, $metodo);

// $kmfinal = '40000';
// $emprestimo = 1;
// $veiculo = 1;
// atualiza_km_final($conexao, $kmfinal, $emprestimo, $veiculo);
?>