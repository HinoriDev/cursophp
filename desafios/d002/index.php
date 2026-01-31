<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    //$min = 0;
    //$max = 100;
    //$num = random_int(min, max);
    $num = random_int(0, 100);
    //rand() = 1951 - linear Congruential Generator (LCG)
    //mt_rand() = 1997 - Mersenne Twister (mais rápido e com um período maior)
    //random_int() = 2017 - Gera números aleatórios criptograficamente seguros
    echo "Gerando um número aleatório entre 0 e 100...<br>";
    echo "O valor gerado foi <strong>$num</strong>.<br>";
    ?>
    <button onclick="javascript:document.location.reload()">&#x1f504;Gerar outro</button>
  </main>

</body>

</html>