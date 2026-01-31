<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">

<body>
  <main>
    <?php
    $idade = $_GET['idade'] ?? 0;
    $futuro = $_GET['futuro'] ?? 2026;
    ?>
    <h1>Calculando a sua idade</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="idade">Em que ano você nasceu?</label>
      <input type="number" name="idade" id="idade" max="2026" required value="<?= $idade ?>">
      <label for="futuro">Quer saber sua idade em que ano?(atualmente estamos em 2023)</label>
      <input type="number" name="futuro" id="futuro" required value="<?= $futuro ?>">
      <button type="submit">Qual será minha idade?</button>
    </form>
  </main>
  <section>
    <h2>Resultado</h2>
    <?php
    $idadeFutura = $futuro - $idade;
    echo "<p>Quem nasceu em $idade vai ter <strong>$idadeFutura anos</strong> em $futuro.</p>";
    ?>
  </section>
</body>

</html>