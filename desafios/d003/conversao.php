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
    <h1>Conversor de Moedas</h1>
    <?php
    $real = $_GET["din"];
    $cotação = 5.21; //cotação do dolar em 29/01/2026
    $dolar = $real / $cotação;
    echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

    // $padrão = number_create("pt-BR" ou "USA", NumberFormatter::CURRENCY);
    // echo "Seus " . number_format_currency($padrão, $real, "BRL") . " equivalem a " . number_format_currency($padrão, $dolar, "USD");
    //Biblioteca intl (internationalization) do PHP
    ?>
    <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
  </main>

</body>

</html>