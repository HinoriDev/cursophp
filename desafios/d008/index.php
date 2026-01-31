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
  $raiz = $_GET['raiz'] ?? 0;
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="raiz">Número</label>
      <input type="number" name="raiz" id="raiz">
      <button type="submit">Calcular Raízes</button>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <p>Analisando o <strong>numero <?= $raiz ?></strong>, temos:</p>
    <?php
    // $quadrada = sqrt($raiz);
    // $cubo = pow($raiz, 3);
    $rq = $raiz ** (1 / 2);
    $rc = $raiz ** (1 / 3);
    echo "<ul>
      <li>A raiz quadrada é <strong>" . number_format($rq, 2, ",", ".") . "</strong></li>
      <li>A raiz cúbica é <strong>" . number_format($rc, 2, ",", ".") . "</strong></li>
    </ul>";
    ?>
  </section>
</body>

</html>