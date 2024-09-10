<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        // definição de variáveis

        $nome = "Rafael";
        $sobrenome = "Silva";
        // alteração, pois são VARIÁVEIS

        const PAIS = "Brasil";
        // PAIS = "EUA";
        // dá erro pois não pode alterar valor de constante!!!

        echo "Muito prazer, $nome $sobrenome! Você mora no " .  PAIS;
    ?>   
</body>
</html>