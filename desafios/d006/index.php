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
  $dividendo = $_GET['v1'] ?? 0;
  $dividor = $_GET['v2'] ?? 1;
  ?>
  <main>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="v1">Dividendo</label>
      <input type="number" name="v1" id="v1" min='0' value="<?= $dividendo ?>">
      <label for="v2">Divisor</label>
      <input type="number" name="v2" id="v2" min='1' value="<?= $dividor ?>">
      <input type="submit" value="Analisar">
    </form>
  </main>
  <section class="resultado">
    <h2>Estrutura da Divisão</h2>
    <?php
    $quociente = intdiv($dividendo, $dividor);
    $resto = $dividendo % $dividor;
    // print "<p>$dividendo | $dividor <br> $resto | $quociente</p>";
    ?>
    <table class="divisao">
      <tr>
        <td><?= $dividendo ?></td>
        <td><?= $dividor ?></td>
      </tr>
      <tr>
        <td><?= $resto ?></td>
        <td><?= $quociente ?></td>
      </tr>
    </table>
</body>

</html>