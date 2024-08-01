<?php
require_once "conexao.php";

$idSituacao = $_GET['idSituacao'];
$nome = $_GET['nome'];

// $sql = "INSERT INTO tb_aluno (idSituacao, nome) VALUES ('$idSituacao', '$nome')";

// Monta o código SQL com parâmetros a serem preenchidos.
$sql = "INSERT INTO tb_aluno (idSituacao, nome) VALUES (?, ?)";

// Prepara a declaração utilizando o comando SQL.
$stmt = mysqli_prepare($conexao, $sql);

// Liga as variáveis aos parâmetros (observando seus tipos)
mysqli_stmt_bind_param($stmt, "is", $idSituacao, $nome);

// i para int
// d para float
// s para string
// b para blob

// mysqli_query($conexao, $sql);

// Executa a declaração SQL
mysqli_stmt_execute($stmt);

// Fecha a declaração
mysqli_stmt_close($stmt);

header("Location: listar_alunos.php");
