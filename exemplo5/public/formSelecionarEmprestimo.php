<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formPagamento.php">
        <?php
        require_once "../conexao.php";
        require_once "../operacoes.php";
        
        $emprestimos = listarEmprestimoCliente($conexao, $_GET['idcliente']);
        
        $quantidade = sizeof($emprestimos);
        if ($quantidade > 0) {
            echo "Emprestimos: <br>";
            echo "<select name='idemprestimo'>";
            foreach ($emprestimos as $emprestimo) {
                $idemprestimo = $emprestimo[0];
                $idfuncionario = $emprestimo[1];
                $idcliente = $emprestimo[2];
                $data = $emprestimo[3];

                echo "<option value='$idemprestimo'>$data</option>";
            }
            echo "</select><br><br>";
            echo "<input type='submit' value='Preencher dados do pagamento'>";
        }
        else {
            echo "Não há empréstimos para esse cliente.";
        }
        ?>
    </form>
</body>

</html>