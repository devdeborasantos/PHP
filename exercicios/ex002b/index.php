<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $NOME = "Maria";
        $Nome = "João";
        $nome = "Pedro";

        echo "É verdade que seu nome é $NOME?<br>";
        echo "É verdade que seu nome é $Nome?<br>";
        echo "É verdade que seu nome é $nome?<br>";
        // são 3 variáveis diferentes, devido aos maiusculas e minusculas serem diferentes = case sensitive

        $salario = 2500.75;
        echo "Seu salário é de R$ $salario<br>";
    ?>  
</body>
</html>