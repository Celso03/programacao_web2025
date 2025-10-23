<?php
$result = null;
$color = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $c = floatval($_POST['c']);
    $result = $a + $b + $c;

    if ($a > 10) {
        $color = 'blue';
    } elseif ($b < $c) {
        $color = 'green';
    } elseif ($c < $a && $c < $b) {
        $color = 'red';
    } else {
        $color = 'black';
    }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Ex1 Soma</title></head>
<body>
<h2>Exercício 1 — soma de três valores</h2>
<form method="post">
  A: <input name="a" required type="number" step="any"><br>
  B: <input name="b" required type="number" step="any"><br>
  C: <input name="c" required type="number" step="any"><br>
  <button>Calcular</button>
</form>

<?php if ($result !== null): ?>
  <p style="color:<?=htmlspecialchars($color)?>">Resultado: <?=htmlspecialchars($result)?></p>
<?php endif; ?>
</body>
</html>
