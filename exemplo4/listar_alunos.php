<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de alunos</h1>

    <table style="border-style: solid;">
        <tr>
            <td>id</td>
            <td>idSituacao</td>
            <td>nome</td>
            <td>dataCadastro</td>
        </tr>
        <?php
        require_once "conexao.php";
        require_once "operacoes.php";

        $sql = "SELECT * FROM tb_aluno";

        $resultados = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultados)) {
            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['id'];
                $nome = $linha['nome'];
                $dataCadastro = $linha['dataCadastro'];
                $idSituacao = $linha['idSituacao'];            


                // $sql2 = "SELECT * FROM tb_situacao WHERE id = $idSituacao";
                // $resultado = mysqli_query($conexao, $sql2);
                // $linha2 = mysqli_fetch_array($resultado);

                // $nomeSituacao = $linha2['nome'];
                $nomeSituacao = buscarNomeSituacaoPorId($conexao, $idSituacao);

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nomeSituacao</td>";
                echo "<td>$nome</td>";
                echo "<td>$dataCadastro</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    <br><a href="index.html"><< Início</a>
</body>

</html>