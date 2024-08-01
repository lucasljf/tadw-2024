<?php

function buscarNomeSituacaoPorId($conexao, $id)
{
    $sql = "SELECT nome FROM tb_situacao WHERE id = ?";

    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $nome);

    if (mysqli_stmt_fetch($stmt)) {
        // echo $nome;
        return $nome;
    }

    mysqli_stmt_close($stmt);
}
