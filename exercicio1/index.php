<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $area = ($base * $altura) / 2;

    if ($area > 100) {
      $mensagem = "A área do triângulo é maior que 100.";
    } else {
      $mensagem = "A área do triângulo é menor ou igual a 100.";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cálculo de Área de Triângulo</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <h1>Cálculo de Área de Triângulo</h1>
  <form method="post">
    <label for="base">Base:</label>
    <input type="number" id="base" name="base"><br><br>
    <label for="altura">Altura:</label>
    <input type="number" id="altura" name="altura"><br><br>
    <input type="submit" value="Calcular Área">
  </form>
  <?php if (isset($mensagem)) { ?>
    <div id="resultado"><?= $mensagem ?></div>
  <?php } ?>
</body>
</html>