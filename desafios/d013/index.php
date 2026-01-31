<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
  <style>
  img.nota {
    height: 50px;
    margin: 5px;
  }
  </style>
</head>

<body>
  <?php
  $valor = $_POST['caixa'] ?? 0;
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="Caixa">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
      <input type="number" name="caixa" id="caixa" step="5" value="<?= $valor; ?>">
      <p style="font-size: 0.6em">*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
      <input type="submit" value="Sacar">
  </main>
  <section>
    <h2>Saque de <strong>R$ <?php echo number_format($valor, 2, ',', '.'); ?></strong> realizado</h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <?php
    $resto = $valor;
    $cem = (floor($resto / 100));
    $resto %= 100;
    $cinquenta = (floor($resto / 50));
    $resto %= 50;
    $dez = (floor($resto / 10));
    $resto %= 10;
    $cinco = (floor($resto / 5));
    $resto %= 5;
    ?>
    echo <ul>
      <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?php echo $cem; ?></li>
      <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?php echo $cinquenta; ?></li>
      <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?php echo $dez; ?></li>
      <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?php echo $cinco; ?></li>
    </ul>
  </section>
</body>

</html>