<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes primitivos em PHP</title>
</head>
<body>
    <h1>Testes primitivos em PHP</h1>
    <?php 
        // $num = 0x1A;
        // echo "O valor da variável é $num";
        // 1A em hexadecimal = 26
        // 0x = hexadecimal
        // 0b = binário
        // 0 = octal

        // $v = 300;
        // var_dump($v);
        // $f = 95.48;
        // var_dump($f);
        // $n = "Gustavo";
        // var_dump($n);
        // $b = true;
        // var_dump($b);

        // $num = 3e2; // 3 x 10^2 = 300
        // echo "O valor da variável é $num";

        // $num = "950";
        // var_dump($num);
        // assim aparece na tela string(3) "950"
    
        // $num = (int) "950";
        // var_dump($num);
        // assim eu forço a ser int aparece na tela int(950) = COERÇÃO (você define o tipo)

        // $casado = false;
        // print "O valor para casado é $casado";
        // se a variável booleana estiver com valor false, ela não é impressa na tela

        // $casada = true;
        // print "O valor para casado é $casada";
        // se a variável booleana estiver com valor true, ela não é impressa na tela como o número 1

        // $vet = [6, 2, 9, 3, 5];
        // var_dump($vet);

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>  
</body>
</html>