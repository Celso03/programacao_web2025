<?php
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $base = floatval($_POST['base']);
    $altura = floatval($_POST['altura']);
    $area = ($base * $altura) / 2.0;
    $msg = "Resultado = (Base * Altura) / 2 -> A área do triângulo de base {$base} e altura {$altura} é {$area}";
}
?>
<!doctype html><html><meta charset="utf-8"><body>
<h2>Exercício 5 — área triângulo retângulo</h2>
<form method="post">
 Base: <input name="base" type="number" step="any" required><br>
 Altura: <input name="altura" type="number" step="any" required><br>
 <button>Calcular</button>
</form>
<?php if($msg): ?><p><?=htmlspecialchars($msg)?></p><?php endif; ?>
</body></html>
