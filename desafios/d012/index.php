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
    <?php
    $time = $_GET['time'] ?? 0;
    ?>
    <h1>Calculadora de Tempo</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="time">Qual é o total de segundos?</label>
      <input type="number" name="time" id="time" min="0" value="<?= $time; ?>" required>
      <button type="submit">Calcular</button>
  </main>
  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong> <?php echo number_format($time, 2, ',', '.'); ?> segundos </strong>
      é equivalente a um total
      de:</p>
    <ul>
      <?php
      $resto = $time;
      $semana = (int)($resto / 604800);
      $resto %= 604_800;
      $dia = (int)($resto / 86400);
      $resto %= 86400;
      $horas = (int)($resto / 3600);
      $resto %= 3600;
      $minutos = (int)($resto / 60);
      $segundos = $resto % 60;
      ?>
      <li><?php echo $semana; ?> semanas</li>
      <li><?php echo $dia; ?> dias</li>
      <li><?php echo $horas; ?> horas</li>
      <li><?php echo $minutos; ?> minutos</li>
      <li><?php echo $segundos; ?> segundos</li>
    </ul>
  </section>
</body>

</html>