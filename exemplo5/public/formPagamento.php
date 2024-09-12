<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lançar pagamento</h2>
    <form action="">
        <input type="hidden" value="<?php echo $_GET['idemprestimo']; ?>">
        Valor: <br>
        Preço por KM: <br>
        Método pagamento: <br>

        Carros: <br>
        <?php
            // $carros = listar
        ?>
    </form>
</body>
</html>