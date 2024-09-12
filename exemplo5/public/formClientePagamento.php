<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formSelecionarEmprestimo.php">
        Cliente: <br>
        <select name="idcliente">
            <?php
                require_once "../conexao.php";
                require_once "../operacoes.php";

                $clientes = listarClientes($conexao);

                foreach ($clientes as $cliente) {
                    $id = $cliente[0];
                    $nome = $cliente[1];
                    echo "<option value='$id'>$nome</option>";
                }
            ?>
        </select>
        <input type="submit" value="Selecionar cliente">
    </form>
</body>
</html>