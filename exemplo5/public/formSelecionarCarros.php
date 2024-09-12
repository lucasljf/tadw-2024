<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Carros Disponíveis</h3>

    <form action="gravarEmprestimo.php">
    <?php
        require_once "../conexao.php";
        require_once "../operacoes.php";
        
        $carros = listarVeiculos($conexao);

        foreach ($carros as $carro) {
            // $id = $carro[0];
            echo "<input type='checkbox' name='carros[]' value='$carro[0]'> $carro[2] -- $carro[3] (KM: $carro[1]) <br>";
        }
    ?>
    <input type="hidden" name="idfuncionario" value="<? echo $_GET['idfuncionario'];?>">
    <input type="hidden" name="idcliente" value="<? echo $_GET['idcliente']; ?>">
    <input type="submit" value="Gravar">
    </form>


</body>
</html>