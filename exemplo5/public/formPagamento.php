<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Lançar pagamento</h2>
    <form action="">
        <input type="hidden" value="<?php echo $_GET['idemprestimo']; ?>">
        Preço por KM: <br>
        <input type="text" name="precokm" id="precokm"><br>
        Método pagamento: <br>
        <!-- <input type="text" name="metodo"><br> -->
        <select name="" id="">
            <option>Dinheiro</option>
            <option>Cartão</option>
        </select> <br>
        
        <h4>Carros</h4>
        <hr>
        <?php
        require_once "../conexao.php";
        require_once "../operacoes.php";
        
        $carros = listarVeiculosEmprestimo($conexao, $_GET['idemprestimo']);
        
        // echo "<hr><hr>";
        foreach ($carros as $carroEmprestimo) {
            $veiculo = listarVeiculoPorId($conexao, $carroEmprestimo[0]);
            echo "<input type='hidden' value='$veiculo[0]'>";
            echo "<p>Veículo: $veiculo[2] - $veiculo[3]</p>";
            echo "<p>Km Inicial: $veiculo[1]</p>";
            echo "Km Final: <input type='text' name='kmfinal[]'>";
            echo "<hr>";
        }
        ?>
        Valor total a pagar: <br>
        <input type="text" name="valor" disabled><br>

        <button onclick="">Calcular valor</button>
        <input type="submit" value='Lançar pagamento'>
    </form>
</body>

</html>