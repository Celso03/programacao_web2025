<?php
$output = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $area = $a * $b;
    $text = "A área do retângulo de lados {$a} e {$b} metros é {$area} metros quadrados.";
    if ($area > 10) $output = "<h1>$text</h1>";
    else $output = "<h3>$text</h3>";
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 4 — área do retângulo</h2>
<form method="post">
  Lado a (m): <input name="a" type="number" step="any" required><br>
  Lado b (m): <input name="b" type="number" step="any" required><br>
  <button>Calcular</button>
</form>
<?= $output ?>
</body></html>
