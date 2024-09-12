<?php
require_once "conexao.php";
require_once "operacoes.php";

$emprestimo = 2;
$valor = 3500.30;
$preco = 3.48;
$metodo = 'a vista';

// gravar o pagamento
efetuarPagamento($conexao, $emprestimo, $valor, $preco, $metodo);


// eram 2 variáveis diferentes
// $carros = [2, 4];
// $kmfinal = [5000, 400000];

$carros = [
    ["idcarro" => 2,
    "km_final" => 5000],

    ["idcarro" => 4,
    "km_final" => 400000]
];


// atualizar o km final na tabela emprestimo_has_veiculo
// atualizar o km atual na tabela veiculo
foreach ($carros as $carro) {
    atualiza_km_final($conexao, $carro['km_final'], 2, $carro['idcarro']);
    atualiza_km_atual($conexao, $carro['km_final'], $carro['idcarro']);
}
