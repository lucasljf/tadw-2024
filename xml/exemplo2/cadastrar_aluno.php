<?php
    require_once "conexao.php";

    $nome = $_GET['nome'];
    $matricula = $_GET['matricula'];
    

    $sql = "INSERT INTO tb_aluno (nome, matricula) VALUES ('$nome', '$matricula')";

    mysqli_query($conexao, $sql);

    header("Location: listar_alunos.php")
?>