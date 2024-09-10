<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <p>
            <?php
                $num = $_POST["n"] ?? 0;
                echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";
                // receber a parte inteira do número
                $int = (int) $num;
                // receber a parte fracionária do número
                $fra = $num - $int;
                echo "<ul><li>A parte inteira do número é <strong>". number_format($int,0, ",", ".") ."</strong></li>";
                echo "<li>A parte fracionária do número é <strong>". number_format($fra,3, ",", ".") ."</strong></li></ul>";
                // o 0 e 3 acima nos parênteses significam quantidade de casas decimais
            
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>