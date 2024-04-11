<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // exibe o valor da variável 'nome' armazenada na session
    echo 'Seu nome é: ' . $_SESSION['nome'] . '<br>';
    ?>
</body>

</html>