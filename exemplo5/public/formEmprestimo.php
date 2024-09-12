<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formSelecionarCarros.php">
        Funcionário: <br>
        <select name="idfuncionario">
            <?php
                require_once "../conexao.php";
                require_once "../operacoes.php";

                $funcionarios = listarFuncionarios($conexao);

                foreach ($funcionarios as $funcionario) {
                    $id = $funcionario[0];
                    $nome = $funcionario[1];
                    echo "<option value='$id'>$nome</option>";
                }
            ?>
        </select> <br><br>
        Cliente: <br>
        <select name="idcliente">
            <?php
                $clientes = listarClientes($conexao);

                foreach ($clientes as $cliente) {
                    $id = $cliente[0];
                    $nome = $cliente[1];
                    echo "<option value='$id'>$nome</option>";
                }
            ?>
        </select> <br><br>

        <input type="submit" value="Selecionar carros">
    </form>
</body>
</html>