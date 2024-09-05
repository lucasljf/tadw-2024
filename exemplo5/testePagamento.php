<?php
require_once "conexao.php";
require_once "operacoes.php";

$emprestimo = 2;
$valor = 3500.30;
$preco = 3.48;
$metodo = 'a vista';

// gravar o pagamento
efetuarPagamento($conexao, $emprestimo, $valor, $preco, $metodo);

$carros = [2, 4];
$kmfinal = [5000, 400000];

foreach ($carros as $carro) {
    
}
?>