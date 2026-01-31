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
    $valor = $_GET['preco'] ?? 0;
    $porcentual = $_GET['porcentual'] ?? 0;
    ?>
    <h1>Reajuste de Preços</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="preco">Preço do Produto (R$)</label>
      <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?= $valor ?>">
      <label for="porcentual">Qual será o percentual de reajuste?(<strong><span
            id="p"><?= $porcentual ?>%</span></strong>)</label>
      <input type="range" name="porcentual" id="porcentual" min="0" max="100" step="1" oninput="mudaValor()"
        value="<?= $porcentual ?>">
      <button type="submit">Reajustar</button>
    </form>
  </main>
  <section>
    <h2>Resultado do Reajuste</h2>
    <?php
    $aumento = $valor * $porcentual / 100;
    $novoValor = $valor + $aumento;
    echo "<p>O produto que custava R$ " . number_format($valor, 2, ',', '.') . ", com " . "<strong>" . number_format($porcentual, 0, ',', '.') . "%</strong>, agora custa R$ " . "<strong>" . number_format($novoValor, 2, ',', '.') . "</strong>.</p>";
    ?>
  </section>
  <script>
  //declarações automaticas
  mudaValor()

  function mudaValor() {
    p.innerText = porcentual.value + '%';
  }
  </script>
</body>

</html>