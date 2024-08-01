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

        $resultados = listarAlunos($conexao);

        foreach ($resultados as $aluno) {
                echo "<tr>";
                echo "<td>$aluno[0]</td>";
                echo "<td>$aluno[1]</td>";
                echo "<td>$aluno[2]</td>";
                echo "<td>$aluno[3]</td>";
                echo "</tr>";
        }
        ?>
    </table>

    <br><a href="index.html"><< Início</a>
</body>

</html>