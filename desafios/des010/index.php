<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Área de declarações 
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="idnasc" min="1900" max="<?=($atual-1)?>" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (ano atual: <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="idano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $idade = $ano - $nasc
            // Está com falha pois se colocar ano menor do que o nascimento mostra idade negativa, mas aprenderemos a corrigir isso em próximas aulas!
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section> 
</body>
</html>