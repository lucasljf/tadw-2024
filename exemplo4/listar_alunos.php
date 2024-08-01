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

        $sql = "SELECT * FROM tb_aluno";

        $resultados = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultados)) {
            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['id'];
                $idSituacao = $linha['idSituacao'];
                $nome = $linha['nome'];
                $dataCadastro = $linha['dataCadastro'];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$idSituacao</td>";
                echo "<td>$nome</td>";
                echo "<td>$dataCadastro</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>