<?php

function listarAlunos($conexao)
{
    $sql = "SELECT * FROM tb_aluno";

    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $id, $idSituacao, $nome, $dataCadastro);

    mysqli_stmt_store_result($stmt);

    $lista = [];
    if (mysqli_stmt_num_rows($stmt) > 0) {
        while (mysqli_stmt_fetch($stmt)) {
            $lista[] = [$id, $idSituacao, $nome, $dataCadastro];
        }
    }

    mysqli_stmt_close($stmt);

    return $lista;
}

function listarSituacoes($conexao)
{
    $sql = "SELECT * FROM tb_situacao";

    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $id, $nome);

    mysqli_stmt_store_result($stmt);

    $lista = [];
    if (mysqli_stmt_num_rows($stmt) > 0) {
        while (mysqli_stmt_fetch($stmt)) {
            $lista[] = [$id, $nome];
        }
    }
    mysqli_stmt_close($stmt);

    return $lista;
}

function buscarNomeSituacaoPorId($conexao, $id)
{
    $sql = "SELECT nome FROM tb_situacao WHERE id = ?";

    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $nome);

    if (mysqli_stmt_fetch($stmt)) {
        return $nome;
    }

    mysqli_stmt_close($stmt);
}
