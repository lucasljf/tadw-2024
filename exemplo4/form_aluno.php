<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="inserir_aluno.php" method="get">
        idSituação: <br>
        <select name="idSituacao">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM tb_situacao";

            $resultados = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultados)) {
                while ($linha = mysqli_fetch_array($resultados)) {
                    $idSituacao = $linha['id'];
                    $nome = $linha['nome'];

                    echo "<option value='$idSituacao'>$nome</option>";
                }
            }
            ?>
        </select> <br><br>

        Nome: <br>
        <input type="text" name="nome"> <br><br>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>