<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_412;
        $salario = $_GET['sal'] ?? $minimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="idsal" value="<?=$salario?>" step="0.01">
            <input type="submit" value="Calcular">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
        </form>     
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            // $tot = (int) ($salario / $minimo);
            $dif = $salario % $minimo;

            // echo "<p>Ganha $tot salários mínimos + R$$dif.</p>";
            echo "<p>Quem recebe um salário de R\$". number_format($salario, 2, ",", ".")." ganha <strong>$tot salários mínimos</strong> + R\$". number_format($dif, 2, ",", ".").".</p>";       
        ?>
    </section>    
</body>
</html>