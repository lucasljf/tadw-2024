<?php
require_once "conexao.php";

$idSituacao = $_GET['idSituacao'];
$nome = $_GET['nome'];

$sql = "INSERT INTO tb_aluno (idSituacao, nome) VALUES ('$idSituacao', '$nome')";

mysqli_query($conexao, $sql);

header("Location: listar_alunos.php");
