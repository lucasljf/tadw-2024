<?php
// inicia a session
session_start();

// armazena em uma variável o valor do campo 'nome' enviado via GET
$nome = $_GET['nome'];

// armazena o valor da variável 'nome' na session
$_SESSION['nome'] = $nome;

header('Location: pagina2.php');
