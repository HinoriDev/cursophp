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
    <h1>Resultado Final</h1>
    <p>
      <?php
      $numero = $_GET["numero"] ?? "Sem número";
      $sucessor = $numero + 1;
      $antecessor = $numero - 1;
       echo "O número escolhido foi <strong>$numero</strong>.<br>";
       echo "Seu antecessor é <em>$antecessor</em>.<br>";
       echo "Seu sucessor é <em>$sucessor</em>.";
       // echo "Seu antecessor é" . ($numero - 1) . "<br>";
       // echo "Seu sucessor é" . ($numero + 1) . "<br>";
      ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
  </main>
</body>

</html>