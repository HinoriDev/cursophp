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
  <?php
  $minimo = 1_621.00;
  $salario = $_GET['salario'] ?? 0;
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="s1">Salário (R$)</label>
      <input type="number" name="salario" id="s1" step="0.01" required>
      <p>Considerando o salário mínimo de <strong>R$ <?= number_format($minimo, 2, ",", ".") ?></strong></p>
      <button type="submit">Calcular</button>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
    $total = (int)($salario / $minimo);
    $resto = $salario % $minimo;
    echo "<p>Quem recebe um salário de R$ " . number_format($salario, 2, ",", ".") . " ganha <strong>$total salários mínimos</strong> + <strong>R$ " . number_format($resto, 2, ",", ".") . "</strong></p>";
    ?>
  </section>
</body>

</html>